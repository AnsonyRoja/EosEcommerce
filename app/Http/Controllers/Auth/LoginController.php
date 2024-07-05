<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'email'; // Cambiar si el nombre del campo de correo electrónico en la base de datos es diferente
    }

    protected function authenticated(Request $request, $user)
    {
        // Personalizar aquí qué sucede después de que el usuario inicie sesión
        // Por ejemplo, redireccionar a una página específica
        return redirect()->route('dashboard');
    }

    protected function loggedOut(Request $request)
    {
        // Personalizar aquí qué sucede después de que el usuario cierre sesión
        // Por ejemplo, redireccionar a la página de inicio
        return redirect()->route('home');
    }
}
