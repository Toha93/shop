<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(Request $request) {

       
        $toEmail = "salo.anton.93@mail.ru";
        Mail::to($toEmail)->send(new ReservPlantMail($name, $adr, $sum));
    }
}
