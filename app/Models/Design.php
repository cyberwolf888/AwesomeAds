<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Design extends Model
{
    protected $table = "design";
    public $PATH_IMG = null;

    public function __construct()
    {
        $this->PATH_IMG = storage_path().'\design';

        return true;
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'image' => 'mimes:png,gif,jpeg,jpg,psd,pdf,ai|max:5500'
        ]);
    }
}
