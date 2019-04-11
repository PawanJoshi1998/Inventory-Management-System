<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productscontroller extends Controller
{
    public function index(){

    	// die('Hello From Product Controller');
    	$products = Product::all();
    	
    	return view('products.index', compact('products'));
    }
}
