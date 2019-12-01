<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'			=>$faker->name,
        'supplier_id'	=>1,
        'price'			=>'700',
        'description'	=>'Good product',
        'quantity'		=>'10',
        'brand'			=>'Aci',
        'status'		=>'pending',

    ];
});