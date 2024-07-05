<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Categories extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }
    public function setOrderAttribute($posicion)
    {
        
        $count=1;
   
       
        $a=DB::select("SELECT * FROM categories c ORDER BY c.order ASC");
        
        
        foreach($a as $cod => $obj){
            if($count==$posicion){
                $count++;
            }
             if($this->id!=$obj->id){
                $arr[$obj->id]=$count;
                $count++;
            }


        }
       // print_r($arr);
      //  exit();
        foreach($arr as $co=>$va){
            Categories::where('id', $co)->update(array('order' => $va));
       
        }
       $this->attributes['order']=$posicion;
     
    }
}
