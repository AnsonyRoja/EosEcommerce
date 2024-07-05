<?php

namespace App\Http\Controllers;

use App\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = Favorites::all(); // Obtener todos los favoritos
        return response()->json($favorites, 200);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $favorite = new Favorites();
        $favorite->user_id = $request->user_id;
        $favorite->product_id = $request->product_id;
        $favorite->save();
    
        return response()->json($favorite, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener los datos de la solicitud JSON
        $productsId = $request->input('products_id');
        $userId = $request->input('user_id');
        
        // Crear y guardar el favorito
        $favorite = new Favorites();
        $favorite->user_id = $userId;
        $favorite->product_id = $productsId;
        $favorite->save();
    
        return response()->json($favorite, 201);
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function show(Favorites $favorites)
    {
        return response()->json($favorites, 200);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorites $favorites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorites $favorites)
    {
        $favorites->update($request->all());
        return response()->json($favorites, 200);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favorites  $favorites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorites $favorites)
    {
        $favorites->delete();
        return response()->json(null, 204);
    }
    
}
