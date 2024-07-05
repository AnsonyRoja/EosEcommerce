<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVisitProducts extends Model
{
    protected $table = 'user_visit_products'; // Nombre de la tabla en la base de datos

    // Relación con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
}
