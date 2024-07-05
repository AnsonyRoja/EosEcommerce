<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\ProductCategory;
use Validator;
use App\Http\Resources\Category as CategoryResource;

class CategoryController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Categories = ProductCategory::where('status','A')->orderBy("order","asc")->get();
        return $this->sendResponse(CategoryResource::collection($Categories), 'Category retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input = $request->all();
 
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $Category = ProductCategory::create($input);
   
        return $this->sendResponse(new CategoryResource($Category), 'Category created successfully.');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $Category = ProductCategory::find($id);

        if (is_null($Category)) {
            return $this->sendError('Category not found.');
        }

        return $this->sendResponse(new CategoryResource($Category), 'Category retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, ProductCategory $Category)
    {

        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }


        $Category->name = $input['name'];
        $Category->detail = $input['detail'];
        $Category->save();

        return $this->sendResponse(new CategoryResource($Category), 'Category updated successfully.');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function destroy(ProductCategory $Category)
    {
        $Category->delete();
        return $this->sendResponse([], 'Category deleted successfully.');
    }

}
