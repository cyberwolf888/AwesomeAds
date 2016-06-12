<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
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

    public function sendemail()
    {
        $data = array(
            'name' => "Learning Laravel",
        );

        Mail::send('welcome', $data, function ($message) {

            $message->from('awesome.advertiser@gmail.com', 'Learning Laravel');

            $message->to('wijaya.imd@gmail.com')->subject('Learning Laravel test email');

        });

        return "Your email has been sent successfully";
    }
}
