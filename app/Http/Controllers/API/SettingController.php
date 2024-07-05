<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Setting;
use Validator;
use App\Http\Resources\Setting as SettingResource;

class SettingController extends BaseController
{
    public function all()
    {
        $Settings = Setting::all();
        return $this->sendResponse(SettingResource::collection($Settings), 'Product retrieved successfully.');
    }
}
