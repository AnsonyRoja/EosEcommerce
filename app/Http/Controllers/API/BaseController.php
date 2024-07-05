<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendResponse($result, $message='')
    {

    	$response = [
            'success' => true,
            'code'    => 200,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendError($error='Disculpe, intente nuevamente.', $errorMessages = [], $code = 200)
    {

    	$response = [
            'success' => false,
            'code'    => 409,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);

    }
    public function manejar_error($e,$mostrar_error=false){
            $msj=$e->getMessage();    
            preg_match('/^SQLSTATE.[0-9]+/', $msj, $matches);
            $arr=explode("[",$matches[0]);
            if($mostrar_error)  echo  $msj;
            switch($arr[1]){
                case 23502:
                case 42703: return "Debe completar todos los campos obligatorios.";
            break;
                case 23503: return "Disculpe, pero uno de los datos introducidos es incorrecto.";
            break;
                case 101: return "Debe estar logeado";

            default:
                return  "Disculpe intente nuevamente.";

            }

    }
}