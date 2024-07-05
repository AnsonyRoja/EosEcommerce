<?php

namespace App\Http\Controllers\API;

use App\Banks;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\DB;


class BanksController extends BaseController
{
    public function index()
    {
        $Banks = DB::select(DB::raw("SELECT b.*,bkd.coins_id,
        STRING_AGG( CONCAT('Titular: ',bkd.titular,'<br> Tipo de cuenta: ', (CASE WHEN bkd.account_type = 'C' THEN 'Corriente' ELSE 'AHORRO' END), '<br> Moneda: ',c.name,'<br> Cuenta: ',bkd.description) ,' || ') as cuentas
        from banks as b
        INNER JOIN bank_datas as bkd on bkd.banks_id = b.id
        INNER JOIN coins as c on c.id = bkd.coins_id
        group by b.id,bkd.banks_id,bkd.coins_id"));
        return $this->sendResponse($Banks, 'Banks retrieved successfully.');
    }

    public function show($id) {

    }

    public function getByPaymentMethod($payment_id) {
        $Banks = DB::select(DB::raw("SELECT b.*,bkd.id as bank_data_id,bkd.coins_id,
        STRING_AGG( CONCAT('Titular: ',bkd.titular,'<br> Tipo de cuenta: ', (CASE WHEN bkd.account_type = 'C' THEN 'Corriente' ELSE 'AHORRO' END), '<br> Moneda: ',c.name,'<br> Cuenta: ',bkd.description) ,' || ') as cuentas
        from banks as b
        INNER JOIN bank_datas as bkd on bkd.banks_id = b.id
        INNER JOIN coins as c on c.id = bkd.coins_id
        INNER JOIN payment_methods on payment_methods.id = bkd.payment_methods_id
        WHERE payment_methods.id = '".$payment_id."'
        group by b.id,bkd.banks_id,bkd.coins_id,bank_data_id"));
        return $this->sendResponse($Banks, 'Banks retrieved successfully.');
    }
}
