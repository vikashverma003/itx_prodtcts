<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

  


     public function index()
    {
        return view('frontend.home');
    }
     public function about_us()
    {
        return view('frontend.about_us');
    }

}

