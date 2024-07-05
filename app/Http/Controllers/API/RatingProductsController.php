<?php

namespace App\Http\Controllers\API;
use App\RatingProducts;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class RatingProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  

     public function index(Request $request)
     {
         $query = RatingProducts::query();
     
         // Filtrar por nombre de producto
         if ($request->has('product_name')) {
             $query->whereHas('product', function ($query) use ($request) {
                 $query->where('name', 'like', '%' . $request->input('product_name') . '%');
             });
         }
     
         // Aplicar algoritmo de ordenamiento
         if ($request->has('sort')) {
             $sort = $request->input('sort');
             if ($sort === 'rating_asc') {
                 $query->orderBy('rating', 'asc');
             } elseif ($sort === 'rating_desc') {
                 $query->orderBy('rating', 'desc');
             }
             // Agregar más algoritmos de ordenamiento según sea necesario
         }
     
         $opiniones = $query->with('user', 'product')->get();
         
         // Pasar los datos a la vista y mostrarla
         return view('opiniones.index', ['opiniones' => $opiniones]);
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
        $RatingProducts = new RatingProducts;
        $RatingProducts->users_id=1;


        if($request->products_id and $RatingProducts->users_id and $request->rating){
            $RatingProducts->products_id=$request->products_id;
            if($request->rating>5) $request->rating=5;
            if($request->rating<1) $request->rating=0;

            $RatingProducts->rating=$request->rating;
            if($request->opinion){
                $RatingProducts->opinion=ucfirst(mb_strtolower($request->opinion));
            }
            $RatingProducts->save();
            return $this->sendResponse($RatingProducts);
        }else{
            
            return $this->sendError();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RatingProducts  $ratingProducts
     * @return \Illuminate\Http\Response
     */
    //Listar todas las calificaciones de 1 producto en especifico
    public function show($id)
    {
        $a=RatingProducts::where('products_id',$id)->get();
        return $this->sendResponse($a);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RatingProducts  $ratingProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(RatingProducts $ratingProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RatingProducts  $ratingProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RatingProducts $ratingProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RatingProducts  $ratingProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(RatingProducts $ratingProducts)
    {
        //
    }
}
