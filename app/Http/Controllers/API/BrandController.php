<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Brand;
use Validator;
use App\Http\Resources\Brand as BrandResource;

class BrandController extends BaseController
{
    
	public function index()
    {
        $Brands = Brand::where('status','A')->get();
        return $this->sendResponse(BrandResource::collection($Brands), 'Brand retrieved successfully.');
    
    }
    
}
