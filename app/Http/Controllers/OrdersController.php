<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function show($id)
    {
        $response = [];
        $a = DB::table('orders')
        ->select("orders.*","order_address.address","order_address.zip_code","order_address.urb","order_address.sector","order_address.nro_home","order_address.reference_point",DB::raw("(SELECT (SELECT name FROM orders_status WHERE orders_status.id = trackings.orders_status_id) 
        FROM trackings 
        WHERE trackings.orders_id = orders.id
        order by created_at DESC Limit 1) AS namestatus"))
        ->leftJoin("order_address","orders.order_address_id","=","order_address.id")
        ->join("users","users.id","=","orders.users_id")
        ->where("orders.id",$id)
        ->get();

        $products = DB::table("order_products")
        ->select("products.id","products.name as nombre","order_products.cant as cantidad")
        ->join("products","products.id","=","order_products.products_id")
        ->where("order_products.orders",$id)
        ->get();

        $response["order"] = $a;
        $response["products"] = $products;
        return view("resume",["order" => json_encode($response)]);

    }
    public function showItems($id)
    {
        // Obtener la orden por su ID
        $order = Orders::findOrFail($id);

        // Pasar la orden a la vista
        return view('vendor.voyager.orders.read', compact('order'));
    }

    public function products($id)
    {
        $orden = Orders::findOrFail($id);
        $productos = $orden->productos; // Suponiendo que tengas una relación "productos" en tu modelo Orden

        return view('ordenes.products', compact('orden', 'productos'));
    }
}
