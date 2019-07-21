<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function showLoginForm(){

        return view('admin.login');
    }

    public function login(Request $request)
    {
        //return $request->all();

        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);


        $credentials= ['email'=> $request->email, 'password'=> $request->password];

        if(Auth::guard('admin')->attempt($credentials)){

            return redirect()->intended(route('admin.master'));
        }

        return redirect()->back()->withInput($request->only('email', 'password'));
    }

}
