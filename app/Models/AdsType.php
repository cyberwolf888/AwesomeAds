<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsType extends Model
{
    protected $table = "ads_type";

    public function price()
    {
        return $this->hasOne('App\Models\Price', 'type');
    }

    public function ads()
    {
        return $this->hasMany('App\Models\Ads', 'type');
    }
}
