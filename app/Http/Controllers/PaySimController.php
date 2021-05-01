<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaySimController extends Controller
{
    public function paymentSimulate($num){
        

        if($num == '1111111111111111'){
            return false;
        }
        else{
            return true;
        }
    }
}
