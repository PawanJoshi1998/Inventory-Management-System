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

    public function create(){

    	// dd('This is create function');
    	return view('products.create');
    }

    public function store(Request $request){

    	$products = $request->all();
    	$products['user_id'] =1;
    	product::create($products);
    	return redirect(url('products'));


    }
}
