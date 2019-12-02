<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Product;

class FrontendController extends Controller
{
    public function showHome()
    {
        $products = Product::where('status','active')->get();
        return view('frontend.home',compact('products'));
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

    public function check()
    {
        return view('frontend.productDetails');
    }
}
