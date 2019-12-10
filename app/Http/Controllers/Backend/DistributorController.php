<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor;
use App\Models\User;

class DistributorController extends Controller
{

  public function index(){
  
    $distributors= User::where('type','distributor')->get();
    return view('backend.Distributor.distributor',compact('distributors'));
  }
  
}
