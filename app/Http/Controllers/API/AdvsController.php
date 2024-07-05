<?php

namespace App\Http\Controllers\API;

use App\Advs;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Http\Resources\Advs as AdvsResource;

class AdvsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Advs = Advs::where('status','A')->get();
        return $this->sendResponse(AdvsResource::collection($Advs), 'Advs retrieved successfully.');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advs  $advs
     * @return \Illuminate\Http\Response
     */
    public function show(Advs $advs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advs  $advs
     * @return \Illuminate\Http\Response
     */
    public function edit(Advs $advs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advs  $advs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advs $advs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advs  $advs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advs $advs)
    {
        //
    }

    public function ByType($type)
    {
        $Advs = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower($type)).'%'])->orderBy('order','ASC')->get();
        return $this->sendResponse(AdvsResource::collection($Advs), 'Advs retrieved successfullys.');
    }
}
