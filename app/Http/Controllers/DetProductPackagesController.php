<?php

namespace App\Http\Controllers;

use App\DetProductPackages;
use Illuminate\Http\Request;

class DetProductPackagesController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetProductPackages  $detProductPackages
     * @return \Illuminate\Http\Response
     */
    public function show(DetProductPackages $detProductPackages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetProductPackages  $detProductPackages
     * @return \Illuminate\Http\Response
     */
    public function edit(DetProductPackages $detProductPackages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetProductPackages  $detProductPackages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        var_dump($request);
        // Lógica para actualizar los datos en la base de datos
        $detProductPackage = DetProductPackages::findOrFail($id);
        $detProductPackage->cant = $request->input('cant');
        // Otros campos que desees actualizar
        $detProductPackage->save();

        return response()->json(['message' => 'Datos actualizados correctamente'], 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetProductPackages  $detProductPackages
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetProductPackages $detProductPackages)
    {
        //
    }
}
