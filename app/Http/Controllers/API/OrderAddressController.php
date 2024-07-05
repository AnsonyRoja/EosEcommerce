<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\OrderAddress;

class OrderAddressController extends BaseController
{

    public function index() {
        $Address = OrderAddress::where("users_id",$_SESSION["usuario"]["id"]);
        return $this->sendResponse($Address);
    }

    public function update($id,Request $request) {
        if(isset($_SESSION["usuario"])) {
            $user_id = $_SESSION["usuario"]["id"];
            $datos = $request->all();
            $order = OrderAddress::find($id);
            $order->cities_id = $datos["cities_id"];
            $order->address = $datos["address"];
            $order->status = 'A';
            $order->users_id = $datos["users_id"];
            $order->zip_code = $datos["zip_code"];
            $order->urb = $datos["urb"];
            $order->sector = $datos["sector"];
            $order->nro_home = $datos["nro_home"];
            $order->reference_point = $datos["reference_point"];
            $order->save();

            return $this->sendResponse($order);
        }
        return $this->sendError(101);
    }

    public function store(Request $request) {
        if(isset($_SESSION["usuario"])) {
            $user_id = $_SESSION["usuario"]["id"];
            $datos = $request->all();
            $order = new OrderAddress;
            $order->cities_id = $datos["cities_id"];
            $order->address = $datos["address"];
            $order->status = 'A';
            $order->users_id = $datos["users_id"];
            $order->zip_code = $datos["zip_code"];
            $order->urb = $datos["urb"];
            $order->sector = $datos["sector"];
            $order->nro_home = $datos["nro_home"];
            $order->reference_point = $datos["reference_point"];
            $order->save();
            return $this->sendResponse($order);
            
        }
        return $this->sendError(101);
    }

    function destroy($id) {
        $order = OrderAddress::find($id);
        $order->status = 'I';
        $order->save();

        // $order->delete();
        return $order;
    }

}
