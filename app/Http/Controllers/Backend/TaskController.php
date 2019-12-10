<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Product;

class TaskController extends Controller
{
  /*public function index(){

    return view ('frontpage.productpage.index');
  }*/

  public function index(){
  
    $tasks = Task::get();
    $distributor= User::where('type','distributor')->get();
    return view('backend.Task.task',compact('tasks','distributor'));
  }
  
  public function details($id){
  
    $product= Product::with('supplier')->find($id);
    return view('backend.detailsProduct', compact('product'));
  }


  public function create(){

  }

  public function store(Request $request){

    Task::create([
      'name'        =>$request->name,
      'price'       =>$request->price,
      'description' =>$request->description,
      'quantity'    =>$request->quantity,
      'brand'       =>$request->brand,
      'status'      =>$request->status,
    ]);

    return back();
  }

  public function edit($id){

    $edit= Task::find($id);
    return view('backend.updateTask',compact('edit'));

  }

  public function update(Request $request,$id){

    $data = Task::findorFail($id);

    $data->update([
      'name'        =>$request->name,
      'price'       =>$request->price,
      'description' =>$request->description,
      'quantity'    =>$request->quantity,
      'brand'       =>$request->brand,
      'status'      =>$request->status,
    ]);

    return redirect()->back();
  }

  public function delete($id){

    $data=Task::find($id);
    $data->delete();

    return back();
  }
}
