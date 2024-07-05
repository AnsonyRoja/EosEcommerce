<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorites extends Model
{
    protected $fillable = ['user_id', 'product_id'];

    public static function getUserFavorites()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Buscar todos los favoritos del usuario logueado
        return self::where('user_id', $userId)->get();
    }
}

