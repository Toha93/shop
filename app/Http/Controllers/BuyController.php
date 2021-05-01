<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Checkout;
use App\Http\Controllers\PaySimController;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Mail\OrderMail;

class BuyController extends Controller
{
    public $PaySimController;
    public function __construct(PaySimController $PaySimController){
        $this->PaySimController = $PaySimController;
    }

    public function buyNow(){
        return view('buyForm');
    }

    public function payment(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'adr' => 'required',
            'shipping' => 'required',
        ]);
        $request->session()->put('name', $request->name);
        $request->session()->put('adr', $request->adr);
        $request->session()->put('shipping', $request->shipping); 
        return view('Card');
    }

    public function addOrder (Request $request){
        //echo '123123';
        $validatedData = $request->validate([
            'num' => 'required|digits:16',
            'name' => 'required',
            'code' => 'required|digits:3',
            'date' => 'required',
        ]);
        
        if($this->PaySimController->paymentSimulate($request['num']) == false){
            return "Платёж не прошёл";
        }
        else{
            $cart = Checkout::where('id','>', 0)->with('product')->get();
            $sum = 0;
            if($request->session()->get('shipping') == 0){
                $ship = 0;
            }
            else{
                $ship = 10;
            }
            foreach ($cart as $elem){
                $sum += $elem['product_count'] * $elem['product']['price'];
            }
            $order = new Order;
            $order->total_product_value = $sum+$ship;
            $order->total_shipping_value = $ship;
            $order->client_name = $request->session()->get('name');
            $order->client_address = $request->session()->get('adr');
            $order->save();
            Checkout::where('id', '>', 0)->delete(); 
            $toEmail = "salo.anton.93@mail.ru";
            Mail::to($toEmail)->send(new OrderMail($request->session()->get('name'), $request->session()->get('adr'), $sum+$ship));
            return "Заказ оплачен";
        }
    }

    

}





