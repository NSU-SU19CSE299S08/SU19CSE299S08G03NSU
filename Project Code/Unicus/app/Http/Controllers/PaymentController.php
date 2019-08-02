<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function addPaymentForm(){

        return view('admin.payment.add-payment');
    }

    public function savePayment(Request $request){
        return $request->all();
    }
}
