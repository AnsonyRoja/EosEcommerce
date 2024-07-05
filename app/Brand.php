<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['id', 'name', 'status'];
    
    public function products()
    {
		return $this->hasMany('App\Product');
	}
}
