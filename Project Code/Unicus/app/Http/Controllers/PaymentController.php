<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function addPaymentForm(){

        return view('admin.payment.add-payment');
    }

    public function savePayment(Request $request){
        //return $request->all();

        $payment = new Payment();
        $payment->txnId = $request->txn_id;
        $payment->amount = $request->amount;
        $payment->method = $request->payment_method;
        $payment->save();

        return redirect('/payment/save-payment')->with('message', 'Payment added successfully!');
    }
}
