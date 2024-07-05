<?php

namespace App\Http\Controllers;

use App\Trackings;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
class TrackingsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function show(Trackings $trackings)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function edit(Trackings $trackings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackings $trackings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trackings $trackings)
    {
        //
    }
}
