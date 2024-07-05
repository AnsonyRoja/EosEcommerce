<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'taxes';

    public function products()
    {
        return $this->hasMany('App\ProductTax');
    }
}
