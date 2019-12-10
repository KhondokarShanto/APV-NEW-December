<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Role;
use App\Models\Order;
use App\Models\OrderDetails;
use Session;
use Auth;

class OrderController extends Controller
{
    public function addToCart(Request $request, $id){

	    $product  = Product::find($id);
	    $oldCart  = Session::has('cart') ? Session::get('cart') : null;
	    $cart = Cart::restoreCart($oldCart);
	    $cart->add($product, $product->id);

	    $request->session()->put('cart', $cart);
	    return back();
	}

	public function store(Request $request){

		
		//dd($request->all());

		if(!Auth::user()) {

			$roles = Role::all();
        	return view('frontend.registration', compact('roles'));

		}else{

			$merchandiser_id = auth()->user()->id;
			$total_price = $request->product_price * $request->quantity ;

		    $data=Order::create([

		      'merchandiser_id'     =>$merchandiser_id,
		      'area_id'             =>$request->area_id,
		      'status'              =>'pending',
		    ]);

		    for($i=0;  $i<2; $i++) {

		    	OrderDetails::create([

			       'order_id'          =>$data->id,
			       'product_id'        =>$request->product_id,
			       'quantity'          =>$request->quantity,
			       'total_price'       =>$total_price,
			    ]);
		    }

		    return back();
		}
	}
}
