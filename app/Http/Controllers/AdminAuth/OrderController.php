<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //

    public function index()
    {
    	//$order = Order::all();
    	return view('admin.orders');
    }
}
