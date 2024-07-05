<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Packages;
use Validator;
use App\Http\Resources\Package as PackageResource;
use Illuminate\Support\Facades\DB;

class PackageCotroller extends BaseController
{
    public function index()
    {
        $Package = Packages::where('status','A')->get();
        return $this->sendResponse(PackageResource::collection($Package), 'Package retrieved successfully.');
    }

    public function show($id) {
        $query = DB::table("packages")
        ->select("packages.id as pac_id","packages.name as pac_name","packages.discount as pac_discount","products.*")
        ->join("det_product_packages", "det_product_packages.packages_id","=", "packages.id")
        ->join("products", "det_product_packages.products_id", "=" ,"products.id")
        ->where("packages.id","=",$id)->get();
        return $this->sendResponse($query, 'Package retrieved successfully.');
    }
}
