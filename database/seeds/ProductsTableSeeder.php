<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
        Product::create([

	        'name'			    =>'Honey',
          'supplier_id'   =>1,
	        'price'			    =>'750',
	        'description'	  =>'Best honey in Bangladesh',
	        'quantity'		  =>'10',
	        'brand'		      =>'Agro',
          'status'        =>'pending',


        ]);

        factory(Product::class, 5)->create();
    }
}
