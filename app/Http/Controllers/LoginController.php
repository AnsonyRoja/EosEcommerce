<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validar los datos de inicio de sesión
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión
        if (auth()->attempt($credentials)) {
            // Autenticación exitosa
            return response()->json(['success' => true, 'message' => 'Login successful']);
        }

        // Si la autenticación falla, devolver un error
        return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
    }
}
