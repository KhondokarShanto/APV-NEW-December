<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class RequisitionController extends Controller
{
	public function index(){

    	$products = Product::where('status','pending')->get();
    	$suppliers= User::where('type','supplier')->get();
    	$categories = Category::all();

    	return view('backend.Product.product',compact('products','suppliers','categories'));  
	}
}
