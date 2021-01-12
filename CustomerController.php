<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Response;
class CustomerController extends Controller
{
	    public function index(){
$items = Customer::all();
$items1=$items->toJson();
//dd($items1);
 return view('user.customers', [
        'item' => $items1,
    ]);
 
	}
  
}
