<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function test(){
    	// $data = DB::table('customers')->get();
    	$data = response()->json(DB::table('customers')->get());
    	dd($data);

    }
}
