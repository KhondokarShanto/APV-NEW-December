<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\User;


class AreaController extends Controller
{
    public function index(){
      $areas = Area::all();
      return view('backend.Area.area',compact('areas'));
  }


  public function store(Request $request){

    Area::create([
      'name'        =>$request->name,
      'postcode'    =>$request->postcode,
      'description' =>$request->description,

    ]);

    return back();
  }


  public function update(Request $request,$id){

    $data = Area::findorFail($id);

    $data->update([
      'name'           =>$request->name,
      'postcode'       =>$request->postcode,
      'description'    =>$request->description,

    ]);

    return redirect()->route('show.area');
  }

  public function delete($id){

    $data=Area::find($id);
    $data->delete();

    return back();
  }
}
