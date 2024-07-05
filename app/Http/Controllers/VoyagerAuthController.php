<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    // Sobreescribir el método login
    public function postLogin(\Illuminate\Http\Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            $user = Auth::user();
            // Verificar si el usuario tiene el rol de administrador
            if ($user->hasRole('administrador') || $user->hasRole('diseñador' || $user->hasRole('super'))) {
                return redirect()->intended($this->redirectPath());
            } else {
                // Usuario no tiene el rol de administrador, cerrar sesión
                Auth::logout();
                return redirect()->route('voyager.login')->with('error', 'No tienes permisos para acceder.');
            }
        }

        // Autenticación fallida
        return redirect()->route('voyager.login')->with('error', 'Credenciales incorrectas.');
    }
}
