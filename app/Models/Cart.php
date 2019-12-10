<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded=[];

    public function product(){
    	
    	return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function merchandiser(){
    	
    	return $this->hasOne(User::class, 'id', 'merchandiser_id');
    }

    public function distributor(){
    	
    	return $this->hasOne(User::class, 'id', 'distributor_id');
    }

    public function area(){
    	
    	return $this->hasOne(Area::class, 'id', 'area_id');
    }
}
