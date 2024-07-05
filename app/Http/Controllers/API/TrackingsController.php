<?php

namespace App\Http\Controllers\API;

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
        $Tracking = new Trackings;
        $Tracking->users_id=1;


        if($request->orders_id and $Tracking->users_id and $request->orders_status_id){
            $Tracking->orders_id=$request->orders_id;
            $Tracking->orders_status_id=$request->orders_status_id;
            if($request->description){
                $Tracking->description=ucfirst(mb_strtolower($request->description));
            }
            $Tracking->save();
            return $this->sendResponse($Tracking);
        }else{
            
            return $this->sendError();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    //ID DE LA ORDEN //cambiar la relacion a el usuario de la orden
    public function show($id)
    {
        $id_usuario=1;
        $a=Trackings::where('users_id',$id_usuario)->where('orders_id',$id)->get();
        return $this->sendResponse($a);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        //
    }
}
