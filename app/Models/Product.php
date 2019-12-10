<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function supplier()
    {
    	return $this->hasOne(User::class, 'id', 'supplier_id');
    }

    public function category()
    {
    	return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
