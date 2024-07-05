<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'description', 'image','parent_id','order','slug','status','image'];
    
    public function subcategories()
    {
        return $this->hasMany("App\ProductSubcategory");
    }
}
