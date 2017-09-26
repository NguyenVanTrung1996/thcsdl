<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function getdata_food(){
    	return Product::all()->where('type','=','1');
    }
    public function getdata_drink(){
    	return Product::all()->where('type','=','0');
    }
}
