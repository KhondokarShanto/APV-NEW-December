<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Product;
use App\Models\Area;
use App\Models\Cart;
use Auth;

class FrontendController extends Controller
{
    public function showHome()
    {   
        if(Auth::user()){

            $id         = auth()->user()->id;
            $carts      = Cart::with('product')->where('merchandiser_id', $id)->get();
            $cart       = Cart::with('product')->where('merchandiser_id', $id)->first();
            $totalPrice = Cart::where('merchandiser_id', $id)->sum('price');
            $products   = Product::where('status','active')->get();
            $productQty = Cart::where('merchandiser_id', $id)->get();
            $productQty = $productQty->count();
            return view('frontend.home',compact('products','carts','cart','totalPrice','productQty'));

        }else{

            $products   = Product::where('status','active')->get();

            return view('frontend.home',compact('products'));
        }
        
    }

    public function showLogin()
    {
        return view('frontend.login');
    }

    public function showRegistration()
    {
        $roles = Role::all();
        return view('frontend.registration', compact('roles'));
    }

    public function showProduct($id)
    {   
        $m_id       = auth()->user()->id;
        $carts      = Cart::with('product')->where('merchandiser_id', $m_id)->get();
        $cart       = Cart::with('product')->where('merchandiser_id', $m_id)->first();
        $totalPrice = Cart::where('merchandiser_id', $m_id)->sum('price');
        $productQty = Cart::where('merchandiser_id', $m_id)->get();
        $productQty = $productQty->count();
        $product    = Product::with('supplier','category')->find($id);
        $areas      = Area::get();

        return view('frontend.productDetails', compact('product','areas','carts','cart','totalPrice','productQty'));
    }

    public function showCart()
    {
        $id         = auth()->user()->id;
        $carts      = Cart::with('product')->where('merchandiser_id', $id)->get();
        $cart       = Cart::with('product')->where('merchandiser_id', $id)->first();
        $totalPrice = Cart::where('merchandiser_id', $id)->sum('price');
        $productQty = Cart::where('merchandiser_id', $id)->get();
        $productQty = $productQty->count();

        return view('frontend.cart', compact('carts','cart','totalPrice','productQty'));
    }
}
