<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class DetBankOrders extends Model
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
       // exit(request()->input('s')."dd");
    }
    public function getAmountAttribute($value){
        $fg= new FuncionesGenerales;
        return $fg->get_formato_moneda($value);
     }
     public function setAmountAttribute($value)
     {
         
         $fg= new FuncionesGenerales;
         $this->attributes['amount']=$fg->set_formato_moneda($value);
        // exit($this->attributes['amount']."s");
     }
     //public function setUsersIdAttribute($value)
     //{
     //    echo $value."ddd";
    //     exit();
        // $this->attributes['users_id']=$fg->set_formato_moneda($value);
      
    // }
     public function save(array $options = []) 
     { 

         // If no author has been assigned, assign the current user's id as the author of the post 
         if (!$this->users_id && Auth::user()) { 
             $this->users_id = Auth::user()->id; 
         } 

         parent::save(); 
     } 
}
