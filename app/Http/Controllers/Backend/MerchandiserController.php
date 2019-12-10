<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchandiser;
use App\Models\User;


class MerchandiserController extends Controller
{

  public function index(){
  
    $merchandisers= User::where('type','merchandiser')->get();
    return view('backend.Merchandiser.merchandiser',compact('merchandisers'));
  }
  
}
