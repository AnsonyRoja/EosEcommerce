<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
Route::post('update_profile', 'API\RegisterController@update_profile');
Route::resource("user_address",'API\OrderAddressController');
Route::get('getAmountBW/{id}', 'API\RegisterController@getAmountBW');

//ADVS
Route::resource('advs', 'API\AdvsController');
Route::get('advs/type/{type}','API\AdvsController@ByType')->name("adv_type");

//bank
Route::resource('banks', 'API\BanksController');
Route::get('banks/byPayment/{payment_id}', 'API\BanksController@getByPaymentMethod');


//CATEGORIES
Route::resource('categories', 'API\CategoryController');

//PRODUCTS
// Route::resource('products', 'API\ProductController');
Route::resource('products', 'API\ProductController');

Route::get('products/sku/{sku}', 'API\ProductController@bysku');

Route::get('products/get/tags', 'API\ProductController@getTags');
Route::get('products/search/{name}','API\ProductController@search')->name("search_like");
Route::get('products/most/viewed','API\ProductController@most_viewed')->name("most_viewed");
Route::get('products/most/recent','API\ProductController@most_recent')->name("most_recent");
Route::get('products/most/sold','API\ProductController@most_sold')->name("most_sold");
Route::get('products/best/price','API\ProductController@best_price')->name("best_price");

//BRANDS
Route::resource('brands', 'API\BrandController');

//COMBOS
Route::resource('packages', 'API\PackageCotroller');

//PACKAGING
Route::resource('packaging', 'API\DetProductPackagesController');



//SETINGS
Route::get('settings','API\SettingController@all')->name('settings');

//PAYMENT_METHODS
Route::resource('payment_methods', 'API\PaymentMethodsController');

//FAVORITE PRODUCTS
Route::resource('favorites', 'API\FavoritesController')->only(['index']);

Route::resource('favorites', 'API\FavoritesController')->only(['store']);

Route::post('favorites/delete', 'API\FavoritesController@delete');

//RATING PRODUCTS
Route::resource('rating_products', 'API\RatingProductsController');

//TRACKING
Route::resource('trackings', 'API\TrackingsController');

//ORDERS
Route::resource('orders', 'API\OrdersController');
    //PRODUCTS
    Route::get('orders/products/{id}','API\OrdersController@getProducts');
    //ADD QUALIFY ORDER
    Route::put('orders/set_qualify/{id}','API\OrdersController@set_qualify');
    //Estadistica del año
    Route::get('orders/estadistica/ano','API\OrdersController@estadistica_ano');
    //obtener ultima orden
    Route::get('orders/ultima/get','API\OrdersController@getUltimaOrden');
    //Cancelar orden
    Route::get('orders/cancelar/{id}','API\OrdersController@CancelarOrder');

//ADD VISIT USER PRODUCT
Route::resource('user_visit_products', 'API\UserVisitProductsController');

Route::get('tasa','API\CoinController@index');

//LOCATION


Route::get('states','API\LocationController@getStates');
Route::get('regions','API\LocationController@getRegions');
Route::get('regions/state/{state_id}','API\LocationController@getRegionsByState');
Route::get('cities','API\LocationController@getCities');
Route::get('cities/region/{region_id}','API\LocationController@getCitiesByRegion');


Route::get('Allstates','API\LocationController@getAllStates');
Route::get('Allregions','API\LocationController@getAllRegions');
Route::get('Allcities','API\LocationController@getAllCities');

//SUSCRIPCION
Route::post('subscribe','API\SubscriptionController@subscribe');