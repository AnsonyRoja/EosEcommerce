<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KpisController extends Controller
{
    public function TransactionsForPeriod(){

    	$title = "Transacciones por Periodo";
    	return view('kpis.transactions_for_period',['title' => $title]);
    }

    public function getData(Request $request){

    	$from = $request->input('date_from');
    	$to = $request->input('date_to');
        $chart = $request->input('chart_name');

    	$data = [];

        switch($chart){

            case 'transactions_for_period':

                $data = DB::select(DB::raw("select 
                    count(id) as qty,
                    to_char(created_at, 'dd/mm/YYYY') as day 
                from orders where status = 'EC'
                and created_at between '$from' and '$to' 
                group by day order by day DESC"));

            break;

            case 'sales_for_period':

                $data = DB::select(DB::raw("select 
                    to_char(o.created_at, 'dd/mm/YYYY') as day,
                    ROUND(SUM((o.total_pay / cast(cast(o.rate_json as json)->2->>'rate' as numeric))), 2) as amount
                from orders as o
                where cast(o.rate_json as json)->2->>'symbol' = '$' AND o.status = 'EC'
                and o.created_at between '$from' and '$to'
                group by day
                order by day DESC"));

            break;

            case 'sales_units_for_period':

                $data = DB::select(DB::raw("select 
                    count(p.sku) as qty_sku,
                    to_char(o.created_at, 'dd/mm/YYYY') as day
                from orders as o
                inner join order_products as op on (op.orders = o.id)
                inner join products as p on (p.id = op.products_id)
                where o.status = 'EC' and o.created_at between '$from' and '$to'
                group by day
                order by day DESC"));

            break;

        }
    	

    	return response()->json($data);
    }

    public function SalesForPeriod(){
        $title = "Ventas por Periodo";
        return view('kpis.sales_for_period')->with(compact('title'));
    }

    public function SalesUnitsForPeriod(){
        $title = "Unidades Vendidas por Periodo";
        return view('kpis.sales_units_for_period')->with(compact('title'));
    }
}
