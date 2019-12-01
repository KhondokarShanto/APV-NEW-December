<?php

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {

    return [
    	
        'first_name'		=>$faker->name,
        'last_name'   		=>$faker->name,
        'user_name'			=>$faker->name,
        'phone_no'			=>'56196',
        'email'				=>$faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'type'				=>'supplier',
        'password'			=>bcrypt('123456'),
        'nid'   			=>'5456331',
        'birth_date'		=>'750',
        'address'			=>'Bangladesh',
        'guardian_name'		=>'Hosen',
        'guardian_phone'	=>'465465',
        'status'			=>'pending',
        'remember_token' => Str::random(10),
    ];
});
