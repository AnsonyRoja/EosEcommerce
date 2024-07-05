<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coin;

class ProfileController extends Controller
{
    function index() {
        
        if(!isset($_SESSION["usuario"]) && empty($_SESSION["usuario"]) && empty($_SESSION["usuario"]["id"])){
            return redirect()->action('HomeController@index');
        }
    

        $Coin = Coin::where("id",1)->first();
        return view("profile",["tasa_dolar"=>$Coin->rate]);
    }
}
