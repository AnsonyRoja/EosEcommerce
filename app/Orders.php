<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FuncionesGenerales;
use App\Product;
class Orders extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function getTotaltaxAttribute($value)
    {
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
    }
    public function setTotaltaxAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['total_tax']=$fg->set_formato_moneda($value);
    }
    public function getSubTotalAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }
     public function setSubTotalAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['sub_total']=$fg->set_formato_moneda($value);
     }
     public function getTotalPackagingAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }
     public function setTotalPackagingAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['total_packaging']=$fg->set_formato_moneda($value);
     }
     public function setTotalTransportAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['total_transport']=$fg->set_formato_moneda($value);
     }
     public function getTotalTransportAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }

     public function setTotalPayAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['total_pay']=$fg->set_formato_moneda($value);
     }
     public function getTotalPayAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }
     public function setCurrencyRateAttribute($value)
     {
         $fg= new FuncionesGenerales;
         $this->attributes['currency_rate']=$fg->set_formato_moneda($value);
     }
     public function getCurrencyRateAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }

     public function productos()
     {
         return $this->hasMany(Product::class);
     }
}
