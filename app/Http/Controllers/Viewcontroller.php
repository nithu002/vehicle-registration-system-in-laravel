<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Viewcontroller extends Controller
{
   public function dashboard(){
    return view('dashboard');

   }
}
