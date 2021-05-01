<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use app\Models\Product;

class ProductRepository
{
    public function getProduct (){
        return Product:: all();//where('id', '>', 0)->with('brand')->get();
    }
}
