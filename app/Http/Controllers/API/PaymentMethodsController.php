<?php

namespace App\Http\Controllers\API;

use App\PaymentMethods;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\PaymentMethods as PaymentMethodsResource;
use Illuminate\Support\Facades\DB;
class PaymentMethodsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = [];
        $a=PaymentMethods::where('status','A')->get();
        foreach($a as $i => $pay) {
            $Bank = DB::select(DB::raw("SELECT b.*,bkd.coins_id,
            STRING_AGG( CONCAT('Titular: ',bkd.titular,'\n Tipo de cuenta: ', (CASE WHEN bkd.account_type = 'C' THEN 'Corriente' ELSE 'AHORRO' END), '\n Moneda: ',c.name,'\n Cuenta: ',bkd.description) ,' || ') as cuentas
            from banks as b
            INNER JOIN bank_datas as bkd on bkd.banks_id = b.id
            INNER JOIN coins as c on c.id = bkd.coins_id
            INNER JOIN payment_methods on payment_methods.id = bkd.payment_methods_id
            WHERE payment_methods.id = '".$pay->id."'
            group by b.id,bkd.banks_id,bkd.coins_id"));
            $pay["bank_datas"] = $Bank;
            array_push($payments,$pay);
        }
        return $this->sendResponse($payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymentMethods= new PaymentMethods;
        $paymentMethods->name=$request->name;
        $paymentMethods->description=$request->description;
        $paymentMethods->save();
        return $this->sendResponse($paymentMethods);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo $paymentMethods->id;
       // return PaymentMethodsResource::collection(PaymentMethods::all());
        //return $this->sendResponse(PaymentMethodsResource::collection($paymentMethods->id), 'Brand retrieved successfully.');
        $a= PaymentMethods::where('id',$id)->get();
        return $this->sendResponse($a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethods $paymentMethods)
    {
        //
    }
}
