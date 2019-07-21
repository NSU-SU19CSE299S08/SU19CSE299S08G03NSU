<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm(){

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);


        $credentials= ['email'=> $request->email, 'password'=> $request->password];

        if(Auth::guard('admin')->attempt($credentials)){

            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'password'));
    }

}
