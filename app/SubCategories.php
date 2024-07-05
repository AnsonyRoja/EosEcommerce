<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SubCategories extends Model
{
    protected $table = 'sub_categories';

    public function categories()
    {
        return $this->belongsTo("App\ProductCategory");
    }

    public function products()
    {
        return $this->hasMany("App\Product");
    }
    public function setPositionAttribute($posicion)
    {
        
        $count=1;
   
       
        $a=DB::select("SELECT * FROM sub_categories c ORDER BY c.position ASC");
        
        
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
            SubCategories::where('id', $co)->update(array('position' => $va));
       
       }
       $this->attributes['position']=$posicion;
     
    }
}
