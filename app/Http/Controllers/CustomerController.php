<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    public function test(){
    	$data = DB::table('customers')->get();
    	dd($data);
    }
}
