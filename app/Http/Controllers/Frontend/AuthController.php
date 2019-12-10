<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Cart;

class AuthController extends Controller
{


/*
|--------------------------------------------------------------------------
| Process Registration Form
|--------------------------------------------------------------------------
*/


  public function processRegistration(Request $request){

   	$validator      = Validator::make($request->all(), [

      'first_name'    => 'required',
      'last_name'     => 'required',
      'user_name'     => 'required|unique:users,user_name',
      'email'         => 'required|email|unique:users,email',
      'password'      => 'required|min:6|confirmed',
      'image'         => 'file|max:10240',
      'address'       => 'required|string',
      'phone_no'      => 'required|numeric',
      'birth_date'    => 'required|date',
      'nid'           => 'required|numeric',
      'guardian_name' => 'required|string',
      'guardian_phone'=> 'required|numeric',

  	]);

  	if ($validator->fails()){

    	return redirect()->back()->withErrors($validator)->withInput();
  	}

    if ($request->hasFile('profile_pic')) {

      $profile_pic = $request->file('profile_pic');
      $file_name = uniqid('profile_pic',true).Str::random(10).'.'.$profile_pic->getClientOriginalExtension();
      
      if($profile_pic->isValid()){
        $profile_pic->storeAs('image',$file_name);
      }

      $user=User::create([

        'first_name'    => trim($request->input('first_name')),
        'last_name'     => trim($request->input('last_name')),
        'user_name'     => trim($request->input('user_name')),
        'phone_no'      => trim($request->input('phone_no')),
        'email'         => strtolower(trim($request->input('email'))),
        'type'          => trim($request->input('type')),
        'image'         => $file_name,
        'nid'           => trim($request->input('nid')),
        'birth_date'    => trim($request->input('birth_date')),
        'address'       => trim($request->input('address')),
        'guardian_name' => trim($request->input('guardian_name')),
        'guardian_phone'=> trim($request->input('guardian_phone')),
        'password'      => bcrypt(trim($request->input('password'))),
        'status'        => 'pending',

      ]);
    }

    if(auth()){
      
      session()->flash('message','Registration successfull');
      return redirect()->back();
    
    }elseif(guest()){
      
      session()->flash('message','Registration successfull');
      return redirect('/login');
    }
  }


/*
|--------------------------------------------------------------------------
| login validation
|--------------------------------------------------------------------------
*/

  public function processLogin(Request $request){

    $validator = Validator::make($request->all(), [

      'email'     => 'required|email',
      'password'  => 'required',

    ]);

    if ($validator->fails()) {

      return redirect()->back()->withErrors($validator)->withInput();
    }

    $credentials = $request->except('_token');

    if (auth()->attempt($credentials)){

      if(auth()->user()->type=='merchandiser'){

        return redirect()->route('main');
        
      }else{

        session()->flash('message', 'Logged in successfully.');

        return redirect()->route('panel');

      }   

    }else{

      session()->flash('message', 'invalid User');

      return redirect()->back();
    }
  }

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

	public function logout(){

    $id = auth()->user()->id;
    $orders= Cart::where('merchandiser_id',$id)->where('status','pending')->get();

    foreach ($orders as $order) {
      $order->delete();
    }
    

    auth()->logout();
    session()->flush();

    return redirect('/login');
  }

}
