<?php

namespace App\Http\Controllers\web;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    
    public function home(Request $request){

        return view('web/mainHome');

    }
  
    
}
