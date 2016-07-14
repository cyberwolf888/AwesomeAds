<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = "price";

    public function ads_type()
    {
        return $this->belongsTo('App\Models\Price', 'type');
    }
}
