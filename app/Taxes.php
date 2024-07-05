<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxes extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function setValueAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['value']=$fg->set_formato_moneda($value);
    }
    public function getValueAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }
}
