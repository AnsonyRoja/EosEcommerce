<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Coin;

class CoinController extends BaseController
{
    public function index()
    {
        $Coin = Coin::where("id",1)->first();
        return $this->sendResponse($Coin, 'Coin retrieved successfully.');
    }
}
