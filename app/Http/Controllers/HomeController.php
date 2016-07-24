<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Mail;
use Validator;
use Crypt;
use Config;
use Helper;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use App\Models\Ads;
use App\Models\Price;
use App\Models\AdsType;
use App\Models\Design;

class HomeController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function articles()
    {
        return view('frontend.articles');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function placeads($ad = null)
    {
        $type = AdsType::all()->pluck('label', 'id');
        return view('frontend.placeads', ['type'=>$type,'ad'=>$ad]);
    }

    public function storeads(Request $request)
    {
        $model = new Ads();
        $validator = $model->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $model->type = $request->type;
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->issues = $request->issues;
        $model->ad_content = $request->ad_content;
        $model->words = $request->words;
        $model->note = $request->note;
        $model->cost = $request->cost;
        $model->total = $request->total;
        $model->payment = $request->payment;
        $model->status = $model::S_PROCESS;
        if($model->save()){
            if ($request->hasFile('image')){
                $images = $request->file('image');
                $imgCount = count($images);
                Validator::extend('max_upload', function($attribute, $value, $parameters)
                {
                    return intval($value) <= intval($parameters[0]);
                });
                $validator_images = Validator::make(
                    ['images'=>$imgCount],
                    ['images' => 'max_upload:3'],
                    ['max_upload' => 'You can upload only 3 image']
                );

                if($validator_images->fails()){
                    $model->delete();
                    return redirect()->back()->withErrors($validator_images)->withInput();
                }

                foreach($images as $image) {
                    $design = new Design();
                    $validator_design = $design->validator(['image'=>$image]);
                    if($validator_design->passes()){
                        $ext = $image->getClientOriginalExtension();
                        $fileName = $model->id.str_random(10).".".$ext;
                        $design->id_ads = $model->id;
                        $design->image = $fileName;
                        if($design->save()){
                            $image->move($design->PATH_IMG, $fileName);
                        }
                    }else{
                        $model->delete();
                        return redirect()->back()->withErrors($validator_design)->withInput();
                    }
                }

            }

            $this->sendemail($model->email);
            return redirect()->route('payment', [Crypt::encrypt($model->id)]);

        }else{
            return redirect()->back()->withInput();
        }
    }

    public function getPrice($type)
    {
        $price = Price::where('type',$type)->first();
        return $price->price;
    }

    public function payment($id)
    {
        try {
            $d_id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return abort(404);
        }

        $ads = Ads::findOrFail($d_id);
        $ads_type = AdsType::findOrFail($ads->type);
        if($ads->payment == $ads::P_CASH && $ads->status == $ads::S_PROCESS){
            return view('frontend.payment',['ads'=>$ads,'type'=>$ads_type]);
        }elseif ($ads->payment == $ads::P_PAYPAL && $ads->status == $ads::S_PROCESS){
            $c_total = Helper::convertCurrency($ads->total,'IDR','USD');

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item_1 = new Item();
            $item_1->setName('Ad Placement:'.$ads_type->label) // item name
            ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($c_total); // unit price

            // add item to list
            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal($c_total);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(route('payment.status'))
                ->setCancelUrl(route('payment.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    echo "Exception: " . $ex->getMessage() . PHP_EOL;
                    $err_data = json_decode($ex->getData(), true);
                    exit;
                } else {
                    die('Some error occur, sorry for inconvenient');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            session()->put('paypal_payment_id', $payment->getId());
            session()->put('ads_id',$ads->id);

            if(isset($redirect_url)) {
                // redirect to paypal
                return redirect($redirect_url);
            }

            return redirect()->route('home')
                ->with('error', 'Unknown error occurred');
        }else{
            return view('frontend.payment',['ads'=>$ads,'type'=>$ads_type]);
        }
    }

    public function getPaymentStatus(Request $request)
    {
        $ads_id = session()->get('ads_id');
        $payment_id = session()->get('paypal_payment_id');

        $ads = Ads::findOrFail($ads_id);
        $ads_type = AdsType::findOrFail($ads->type);

        if (empty($request->PayerID) || empty($request->token)) {
            return redirect()->route('original.route')
                ->with('error', 'Payment failed');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        // PaymentExecution object includes information necessary
        // to execute a PayPal account payment.
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);

        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);

        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

        if ($result->getState() == 'approved') { // payment made
            /*
            return redirect()->route('original.route')
                ->with('success', 'Payment success');
            */
            // clear the session payment ID
            session()->forget('paypal_payment_id');
            session()->forget('ads_id');;
            $ads->status = $ads::S_PAID;
            $ads->save();
            //return view('frontend.payment',['ads'=>$ads,'type'=>$ads_type]);
            return redirect()->route('payment', [Crypt::encrypt($ads->id)]);
        }
        return view('frontend.payment_failed',['ads'=>$ads]);
        /*
        return redirect()->route('home')
            ->with('error', 'Payment failed');
        */
    }

    public function sendemail($email)
    {
        $data = [
            'to' => $email,
            'from' => 'awesome.advertiser@gmail.com',
            'name' => 'Awesome Advertisement',
            'subject' => 'New Ad Placement'
        ];

        Mail::send('welcome', $data, function ($message)  use ($data) {

            $message->from($data['from'], $data['name']);

            $message->to($data['to'])->subject($data['subject']);

        });

        return "Your email has been sent successfully";
    }

    public function sendContact(Request $request)
    {
        dd($request->all());
    }
}
