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
     public function user_details()
    {
        return view('frontend.user_details');
    }

    public function user_details_store(Request $request)
    {
        echo "<pre>"; print_r($request->all());
        //return view('frontend.user_details');
    }

}

