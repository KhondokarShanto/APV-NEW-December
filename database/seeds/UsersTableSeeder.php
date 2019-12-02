<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run(){

        User::create([

	        'first_name'		  	=>'Khondokar',
          	'last_name'   			=>'Shanto',
	        'user_name'			  	=>'Shanto',
	        'phone_no'			  	=>'01521320834',
	        'email'				    =>'Khondokar.shanto@gmail.com',
	        'type'				    =>'admin',
	        'password'			  	=>bcrypt('123456'),
          	'nid'   			    =>'5456331',
	        'birth_date'		  	=>'21/8/1996',
	        'address'			    =>'Dhaka',
	        'guardian_name'			=>'Moinul',
	        'guardian_phone'		=>'01678035152',
	        'status'			    =>'active',

        ]);

        factory(User::class, 4)->create();
    }
}
