<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function test(){
    	$customers = response()->json(DB::table('customers')->get());
    	return view('admin.home', ['customers' => $customers]);
    }
    public function getdata_customer(){
    	return Customer::all();
    }
    public function delete_customer(Request $req){
    	return Customer::destroy($req);
    }
}
