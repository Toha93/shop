<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $product = Product::where('id', '>', 0)->with('brand')->get();
        return view('products', ['product' => $product]);
    }
}