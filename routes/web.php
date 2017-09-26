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
    Route::get('foods','ProductController@getdata_food');
    Route::get('drinks','ProductController@getdata_drink');
    Route::get('delete_customer/{id}',function($id){
    	return App\Customer::destroy($id);
    });
    Route::get('delete_food/{id}',function($id){
    	return App\Product::destroy($id);
    });
    Route::get('delete_drink/{id}',function($id){
    	return App\Product::destroy($id);
    });
});