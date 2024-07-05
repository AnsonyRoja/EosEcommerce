<?php

namespace App;
use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class RatingProducts extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = request()->input('show') ?? 50;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
       public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

}
