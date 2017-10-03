<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'sites', 'as' => 'sites.'], function () {
    Route::get('login','MyController@login');
    Route::get('home','HomeController@home');
    Route::get('customer','CustomerController@test');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('home','AdminController@home');
    Route::get('product','ProductController@product');
});
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('customers','CustomerController@getdata_customer');
    Route::get('foods','ProductController@getdata_foods');
    Route::get('drinks','ProductController@getdata_drinks');
    Route::get('food_news','ProductController@getdata_food_new');
    Route::get('food_hots','ProductController@getdata_food_hot');
    Route::get('drink_news','ProductController@getdata_drink_new');
    Route::get('drink_hots','ProductController@getdata_drink_hot');
    Route::get('delete_customer/{id}',function($id){
    	return App\Customer::destroy($id);
    });
    Route::get('delete_food/{id}',function($id){
    	return App\Product::destroy($id);
    });
    Route::get('delete_drink/{id}',function($id){
    	return App\Product::destroy($id);
    });
    Route::post('add_product_food',function(Request $request){
        return App\Product::create( ['name'=>$request->input(['name']),
                                      'price'=>$request->input(['price']),
                                      'describle'=>$request->input(['describle']),
                                      'type'=> '1',
                                      'pupular'=>$request->input(['pupular']),
                                      'avatar'=>$request->input(['avatar']),
                                      'status'=>$request->input(['status'])]
                                  );
    });
    Route::post('add_product_drink',function(Request $request){
        return App\Product::create( ['name'=>$request->input(['name']),
                                     'price'=>$request->input(['price']),
                                     'describle'=>$request->input(['describle']),
                                     'type'=> '0',
                                     'pupular'=>$request->input(['pupular']),
                                     'avatar'=>$request->input(['avatar']),
                                     'status'=>$request->input(['status'])]
                                  );
    });
});