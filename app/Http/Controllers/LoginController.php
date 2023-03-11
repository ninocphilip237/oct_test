<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class LoginController extends Controller
class LoginController

{
    public function login()
    {
      return view('login');
    }
    public function loggedin()
    {
        $user= ['email' => request('email'),'password' => request('password') ];
        if(auth()->attempt($user))                      //login with auth
        {
         return "Loggin success";
        //  return redirect()->route('users');
        } else
        {
            return redirect()->route('login')->with('message','Login Failed');
        }
        // return "hello";
      //return view('welcome');
    }


}
