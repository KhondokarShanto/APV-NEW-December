<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;


class CategoryController extends Controller
{
  public function index(){
    $categories = Category::all();
    return view('backend.Category.category',compact('categories'));
  }


  public function create(){

  }

  public function store(Request $request){

    Category::create([
      'name'        =>$request->name,
    ]);

    return back();
  }

  public function edit($id){

    $edit= Category::find($id);
    return view('backend.Category.updateCategory',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Category::findorFail($id);

    $data->update([
      'name'           =>$request->name,

    ]);

    return redirect()->route('show.category');
  }

  public function delete($id){

    $data=Category::find($id);
    $data->delete();

    return back();
  }
}
