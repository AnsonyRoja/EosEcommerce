<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{
    protected $table='payment_methods';
    protected $filliable=['name','description','coin_id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }

    public function coin(){
    	return $this->hasOne('App\Coin');
    }
}
