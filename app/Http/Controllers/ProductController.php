<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function getdata_drink_new(){
    	return Product::all()->where('type','=','0')->where('pupular','=','0');
    }
    public function getdata_food_new(){
    	return Product::all()->where('type','=','1')->where('pupular','=','0');
    }

    public function getdata_drink_hot(){
    	return Product::all()->where('type','=','0')->where('pupular','=','1');
    }
    public function getdata_food_hot(){
    	return Product::all()->where('type','=','1')->where('pupular','=','1');
    }

    public function getdata_foods(){
    	return Product::all()->where('type','=','1');
    }
    public function getdata_drinks(){
    	return Product::all()->where('type','=','0');
    }
}
