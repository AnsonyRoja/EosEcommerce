<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Favorites;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\DB;
//use App\Http\Resources\Favorite as FavoriteResource;
class FavoritesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_usuario=($_SESSION["usuario"]["id"] ?? '');
        if(isset($_SESSION["usuario"]["id"]) && !empty($_SESSION["usuario"]["id"])) {
            $a=DB::table("favorites")
            ->select("products.*")
            ->join("products","products.id","=","favorites.products_id")
            ->where('users_id',$id_usuario)
            ->get();
        }else {
            $a = [];
        }
        return $this->sendResponse($a);
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
        $favorite = new Favorites;
        $favorite->users_id=$_SESSION["usuario"]["id"];
        if($request->products_id and $favorite->users_id){
            $favorite->products_id=$request->products_id;   
            $id_usuario = $favorite->users_id;
            //validamos que se guarde
            try {
                $favorite->save();
            } catch (\Exception $e) {
                return 'exist';
            }
            //Traernos todos los favoritos
             $a=Favorites::where('users_id',$id_usuario)->get();
            //return $this->sendResponse($favorite);
             return $a->count();
        }else{
            
            return $this->sendError();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }
    //Metodo para eliminar un favorito del carro
    public function delete(Request $request)
    {
        $product_id = $request->products_id;
        $user_id = $request->user_id;
        
        $res = DB::table('favorites')
        ->where('products_id', '=', $product_id)
        ->where('users_id', '=', $user_id)
        ->delete();
        
        if($res==0){
            $result =  $this->sendError();
        }else{
            $a=Favorites::where('users_id',$user_id)->get();
            $result = $a->count();
        }
        return $result;
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $id_usuario=1;
      //  $row_favorite=Favorite::where('users_id',$id_usuario)->where('id',$id)->get();
      
        $res=Favorite::where('id',$id)->where('users_id',$id_usuario)->delete();
        if($res==0){
            return $this->sendError();
        }else{
            $msg='Eliminado de favoritos';
        }
        return $this->sendResponse('',$msg);
        
    }
}
