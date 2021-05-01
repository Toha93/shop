<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request){

        if(isset($request->id) and isset($request->count)){
            $validatedData = $request->validate([
                'id' => 'required|integer',
                'count' => 'required|integer',
            ]);
        $cart = new Checkout;
        $cart->product_id = $request->id;
        $cart->product_count = $request->count;
        $cart->save();
        }
       return redirect()->route('cart.get');
    }

    
    public function getCart(){
        $cart = Checkout::where('id','>', 0)->with('product')->with('brand')->get();
        //dd($cart);
        return view('cart', ['cart' => $cart]);
    }

    public function deleteCart(){
        Checkout::where('id', '>', 0)->delete(); 
        return redirect('/products');      
    }
}
