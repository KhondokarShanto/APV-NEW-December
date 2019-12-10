<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class RequisitionController extends Controller
{
	public function index(){

		if(auth()->user()->type=='supplier'){

			$id = auth()->user()->id;
	    	$products = Product::where('status','pending')->where('supplier_id',$id)->get();
	    	$suppliers= User::where('type','supplier')->get();
	    	$categories = Category::all();

	    	return view('backend.Requisition.requisition',compact('products','suppliers','categories'));  
		}else{

	    	$products = Product::where('status','pending')->get();
	    	$suppliers= User::where('type','supplier')->orWhere('type','admin')->get();
	    	$categories = Category::all();

	    	return view('backend.Requisition.requisition',compact('products','suppliers','categories'));  

		}

		
	}


	public function details($id){

    	$product= Product::with('supplier')->find($id);
    	$categories= Category::all();
    	return view('backend.Requisition.detailsRequisition', compact('product','categories'));
  	}


  	public function store(Request $request){

    	$validator = Validator::make($request->all(), [

	      'image'         => 'file|max:10240',
	      'name'          => 'required',
	      'category'      => 'required',
	      'price'         => 'required',
	      'quantity'      => 'required',
	      'supplier'      => 'required',

	    ]);

	    if($validator->fails()){

	      return redirect()->back()->withErrors($validator)->withInput();
	    }


	    if ($request->hasFile('product_pic')) {

	      $product_pic = $request->file('product_pic');
	      $file_name = uniqid('product_pic',true).Str::random(10).'.'.$product_pic->getClientOriginalExtension();
	      
	      if($product_pic->isValid()){
	        $product_pic->storeAs('image',$file_name);
	      }       
	    }

	    Product::create([
	      'name'        =>$request->name,
	      'image'       =>$file_name,
	      'category_id' =>$request->category,
	      'price'       =>$request->price,
	      'description' =>$request->description,
	      'quantity'    =>$request->quantity,
	      'brand'       =>$request->brand,
	      'supplier_id' =>$request->supplier,
	      'status'      =>'pending',
	    ]); 

	    return back();
  	}


  	public function update(Request $request,$id){

	    $validator = Validator::make($request->all(), [

	      'image'         => 'file|max:10240',
	      'name'          => 'required',
	      'category'      => 'required',
	      'price'         => 'required',
	      'quantity'      => 'required',

	    ]);

	    if($validator->fails()){

	      return redirect()->back()->withErrors($validator)->withInput();
	    }


	    if($request->hasFile('product_pic')) {

	      $product_pic = $request->file('product_pic');
	      $file_name = uniqid('product_pic',true).Str::random(10).'.'.$product_pic->getClientOriginalExtension();
	      
	      if($product_pic->isValid()){
	        $product_pic->storeAs('image',$file_name);
	      }

	      $data = Product::findorFail($id);

	      $data->update([
	        'name'        =>$request->name,
	        'image'       =>$file_name,
	        'category_id' =>$request->category,
	        'price'       =>$request->price,
	        'description' =>$request->description,
	        'quantity'    =>$request->quantity,
	        'brand'       =>$request->brand,
	        'status'      =>$request->status,
	      ]); 

	    }else{

	    	$data = Product::findorFail($id);

		      	$data->update([
		        'name'        =>$request->name,
		        'category_id' =>$request->category,
		        'price'       =>$request->price,
		        'description' =>$request->description,
		        'quantity'    =>$request->quantity,
		        'brand'       =>$request->brand,
		        'status'      =>$request->status,
	      	]); 
	    }

    	return redirect()->back();
  	}

  	public function delete($id){

    	$data=Product::find($id);
    	$data->delete();

    	return back();
  	}
}
