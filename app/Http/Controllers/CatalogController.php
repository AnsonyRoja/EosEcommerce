<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\ProductCategory;
	use App\Coin;
	use App\Product;
	use App\Advs;
	use Illuminate\Support\Facades\DB;

	class CatalogController extends Controller
	{

		function cambiarBarra($data) {
	        return str_replace("\\", "/", $data);
	    }

		function index() {

			$Ads_a = [];
	        $a = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("izq_producto_a")).'%'])->orderBy('order','ASC')->get();
	        foreach ($a as $i => $m) {
	            $m["image"] = $this->cambiarBarra($m["image"]);
	            array_push($Ads_a, $m);
	        }
			$Ads_a = json_encode($Ads_a);
			
			$Ads_b = [];
	        $a = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("izq_producto_b")).'%'])->orderBy('order','ASC')->get();
	        foreach ($a as $i => $m) {
	            $m["image"] = $this->cambiarBarra($m["image"]);
	            array_push($Ads_b, $m);
	        }
			$Ads_b = json_encode($Ads_b);
			
			$Ads_c = [];
	        $a = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("izq_producto_c")).'%'])->orderBy('order','ASC')->get();
	        foreach ($a as $i => $m) {
	            $m["image"] = $this->cambiarBarra($m["image"]);
	            array_push($Ads_c, $m);
	        }
			$Ads_c = json_encode($Ads_c);
			
			$Ads_d = [];
	        $a = Advs::where('status','A')->whereRaw('LOWER(type) LIKE ?', [trim(strtolower("izq_producto_d")).'%'])->orderBy('order','ASC')->get();
	        foreach ($a as $i => $m) {
	            $m["image"] = $this->cambiarBarra($m["image"]);
	            array_push($Ads_d, $m);
	        }
	        $Ads_d = json_encode($Ads_d);

			if(isset($_GET['cat'])){
				$category_id = filter_input(INPUT_GET, "cat",FILTER_VALIDATE_INT);
				$category = ProductCategory::where('id',$category_id)->get();
				$category = json_decode($category);
				$portada = "storage/".$category[0]->image_b;
				$title = $category[0]->name;
			}else{
				$portada = '/assets/img/banner-titulos.png';
				$title = 'Catalogo';
			}
			
			$Coin = Coin::where("id",1)->first();
			// die($_GET["cat"]);
			$cat = ($_GET["cat"] ?? 0);
			$k = json_encode($this->getTags($cat));

			return view("catalog",[
				"portada"=>$portada,
				"title"=>$title,
				"tasa_dolar"=>$Coin->rate,
				"ads_a"=>$Ads_a,
				"ads_b"=>$Ads_b,
				"ads_c"=>$Ads_c,
				"ads_d"=>$Ads_d,
				"tags"=>$k
			]);
		}

		private function getTags($cat = '') {
			if(isset($cat) && !empty($cat)) {
				$data = Product::select(DB::raw("DISTINCT trim(keyword) as key"))
				->join("det_sub_categories","det_sub_categories.products_id","=","products.id")
				->join("sub_categories","sub_categories.id","=","det_sub_categories.sub_categories_id")
				->where('sub_categories.categories_id','=',$cat)
				->where('products.status','A')
				->whereNotNull('keyword')
				->groupBy("products.id")
				->get();
			}else {
	        	$data = Product::select(DB::raw("DISTINCT trim(keyword) as key"))->where('status','A')->whereNotNull('keyword')->take(20)->get();
	        }
	        $keywords = [];
	        foreach($data as $i => $d) {
	            $tmp = explode(" ", $d->key);
	            foreach($tmp as $j => $t) {
	                array_push($keywords, trim($t));
	            }
	        }
	        $keywords = array_values(array_unique($keywords));
	        return $keywords;
	    }
	}
