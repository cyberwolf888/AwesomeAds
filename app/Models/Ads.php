<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Ads extends Model
{
    protected $table = "ads";

    const P_PAYPAL = "PP";
    const P_CASH = "CH";

    const S_PROCESS = "1";
    const S_PAID = "2";
    const S_CANCELED = "0";

    const L_STATUS = [Ads::S_PROCESS=>'Process', Ads::S_PAID=>'Paid', Ads::S_CANCELED=>'Canceled'];

    public function validator(array $data)
    {
        return Validator::make($data, [
            'type' => 'required|max:2',
            'name' => 'required|max:100',
            'phone' => 'required|min:10|max:15',
            'email' => 'required|email',
            'issues' => 'required|integer',
            'ad_content' => 'required',
            'words' => 'required|integer',
            'cost' => 'required|integer',
            'total' => 'required|integer',
            'payment' => 'required|max:2'
        ]);
    }

    public static function getLabelPayment($payment)
    {
        $label = [Ads::P_CASH=>'Cash',Ads::P_PAYPAL=>'PayPal'];
        return $label[$payment];
    }

    public function design()
    {
        return $this->hasMany('App\Models\Design', 'id_ads');
    }

    public function adtype()
    {
        return $this->belongsTo('App\Models\AdsType', 'type');
    }
}
