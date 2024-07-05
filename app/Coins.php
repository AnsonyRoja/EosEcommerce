<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function getRateAttribute($value)
    {
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
    }
    public function setRateAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['rate']=$fg->set_formato_moneda($value);
    }
    
}
