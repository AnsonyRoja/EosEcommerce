<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Subscribe;
use Validator;

class SubscriptionController extends BaseController
{
    public function subscribe(Request $request) {
        $data = $request->all();
 
        $validator = Validator::make($data, [
            'email' => 'required|unique:subscription',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $Subscribe = Subscribe::create([
            "email" => $data["email"]
        ]);
        
        return $this->sendResponse($Subscribe,'suscripcion realizada con exito');
    }
}
