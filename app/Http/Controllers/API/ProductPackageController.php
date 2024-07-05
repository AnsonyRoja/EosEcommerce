<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\ProductPackage;
use Validator;
use App\Http\Resources\Product as ProductResource;

class ProductPackageController extends BaseController
{

    public function index()
    {
        $Package = ProductPackage::all();
        return $this->sendResponse(ProductResource::collection($Package), 'Package retrieved successfully.');
    }

    public function show($id)
    {
        $Package = ProductPackage::find($id);

        if (is_null($Package)) {
            return $this->sendError('Package not found.');
        }

        return $this->sendResponse(new ProductResource($Package), 'Package retrieved successfully.');
    }

}
