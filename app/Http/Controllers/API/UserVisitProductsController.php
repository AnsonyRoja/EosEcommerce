<?php

namespace App\Http\Controllers\API;

use App\UserVisitProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\DB;
class UserVisitProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserVisitProducts $uvp)
    {
        //$users_id=1; #Id del usuario logueado
        $users_id=($_SESSION["usuario"]["id"] ?? '');
        $cant_mostrar=20;

        try{
            $a=DB::select('SELECT p.name, p.description_short, p.keyword, products_id FROM user_visit_products uvp INNER JOIN products p ON p.id=uvp.products_id WHERE uvp.updated_at > NOW() - interval \'1 month\' AND uvp.users_id='.$users_id.' LIMIT 50');
            $string="";
            foreach ($a as $obj){
                $string.=$obj->name." ".$obj->description_short." ".$obj->keyword." ";
            }
        }
        catch(\Exception $e){
            return $this->sendError($this->manejar_error($e));
        }

       $texto_formateado_para_buscar=str_replace(" "," | ",preg_replace('/\s+/', ' ', trim($string)));
       try{
            $b=DB::select("SELECT id, name, ts_rank_cd(to_tsvector(description_short), query) AS rank
            FROM products, to_tsquery('$texto_formateado_para_buscar') query
            WHERE query @@ to_tsvector(description_short)
            ORDER BY rank DESC
            LIMIT $cant_mostrar");
        }
        catch(\Exception $e){
            return $this->sendError($this->manejar_error($e));
        }
        return $this->sendResponse($b);
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
    public function store(UserVisitProducts $uvp, Request $r)
    {
        $users_id=1;  #Id del usuario logueado
        $a=json_decode($uvp->whereRaw('products_id=1 AND users_id='.$users_id)->get());
      
       
      
        if(isset($a[0]->id)){
            $uvp->updated_at=time();
            try{
                 DB::table('user_visit_products')->where('user_visit_products.id', $a[0]->id)
                 ->update(
                     [
                        'updated_at' => $uvp->updated_at
                      ]
                 );
            
    
             }
             catch(\Exception $e){
               
                return $this->sendError($this->manejar_error($e));
             }


        }else{

            try{
                $uvp->products_id=$r->products_id;
                $uvp->users_id=$r->users_id;
                $uvp->save();
            }
            catch(\Exception $e){
            
                return $this->sendError($this->manejar_error($e));
            }

        }
       
        return $this->sendResponse($uvp);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserVisitProducts  $userVisitProducts
     * @return \Illuminate\Http\Response
     */
    public function show(UserVisitProducts $userVisitProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserVisitProducts  $userVisitProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVisitProducts $userVisitProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserVisitProducts  $userVisitProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserVisitProducts $userVisitProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserVisitProducts  $userVisitProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVisitProducts $userVisitProducts)
    {
        //
    }
}
