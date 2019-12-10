<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Role;
use Session;
use Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $id){

		
		//dd($request->all());

		if(!Auth::user()) {

			$roles = Role::all();
        	return view('frontend.registration', compact('roles'));

		}else{

			$merchandiser_id = auth()->user()->id;
			$product_id = $request->product_id;
			$price = $request->product_price * $request->quantity ;

			$product = Cart::where('merchandiser_id', $merchandiser_id)->where('product_id', $product_id)->first();
			
			$quantity = Cart::select('quantity')->where('merchandiser_id', $merchandiser_id)->where('product_id', $product_id)->first();

			$oldPrice = Cart::select('price')->where('merchandiser_id', $merchandiser_id)->where('product_id', $product_id)->first();


			if ($product) {

				$product->update([

					'area_id'             	=>$request->area_id,
		      		'quantity'           	=>$quantity->quantity + $request->quantity,
		      		'price'              	=>$price + $oldPrice->price,
		    	]);
			}else{

		    	$data=Cart::create([

		      		'merchandiser_id'     	=>$merchandiser_id,
		      		'area_id'             	=>$request->area_id,
		      		'product_id'     		=>$request->product_id,
		      		'quantity'            	=>$request->quantity,
		      		'price'              	=>$price,
		      		'status'              	=>'pending',
		    	]);
			}
			
		    return back();
		}
	}

	public function storeOrder(){

		
		//dd($request->all());

		if(!Auth::user()) {

			$roles = Role::all();
        	return view('frontend.registration', compact('roles'));

		}else{

			$merchandiser_id = auth()->user()->id;
			$products = Cart::where('merchandiser_id', $merchandiser_id)->get();

			foreach ($products as $product) {

				$product->update([

		      		'status'           	=>'confirm',
		    	]);
			}
		
		    return back();
		}
	}
}
