<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class Logincontroller extends Controller
{
    //
    public function login(){
        return view('auth.login');

       }

    public function store(Request $request)  {


        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);
        $email= $request->input('email');
        $password=$request->input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $admin =Admin::where('email',$email , 'password',$password)->first();
            Auth::login($admin);
            return redirect('/dashboard');
        }else{
            return back()->withErrors(['Invalid email or password ']);
        }

    }
}