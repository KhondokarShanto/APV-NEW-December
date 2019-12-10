<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Area;
use App\Models\Cart;
use App\Models\Category;
use App\Models\OrderDetails;

class OrderController extends Controller
{


  public function index(){
  
    $orders         = Cart::with('merchandiser','distributor','area','product')->get();
    $merchandisers  = User::where('type','merchandiser')->get();
    $categories     = Category::all();

    return view('backend.Order.order',compact('orders','merchandisers','categories'));
  }
  
  public function details($id){

    $carts        = Cart::with('product','area','merchandiser','distributor')->where('merchandiser_id', $id)->where('status','confirm')->get();
    $cart         = Cart::with('product','area','merchandiser','distributor')->where('merchandiser_id', $id)->where('status','confirm')->first();
    $totalPrice   = Cart::where('merchandiser_id', $id)->sum('price');
    $distributors = User::where('type','distributor')->get();
//dd($distributors);
    return view('backend.Order.detailsOrder', compact('carts','cart','totalPrice','distributors'));
  }

  public function update(Request $request,$id){

    $orders= Cart::where('merchandiser_id',$id)->where('status','confirm')->get();

    foreach ($orders as $order) {

      $order->update([

        'distributor_id'   =>$request->distributor_id,
        'status'           =>'processing',

      ]);
    }

    return back();
  }

  public function delete($id){

    $data=Order::find($id);
    $data->delete();

    return back();
  }
}
