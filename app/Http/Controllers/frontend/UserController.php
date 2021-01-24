<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function show_view(){

    	return view('frontend.auth.register');
    }

    public function store(Request $request){
		
		$data= $request->all();
        $user = User::create([
            'name' => $data['first_name'].' '.$data['last_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'school' => $data['school'],
            'email' => $data['email'],
            'phone' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'zipcode' => $data['zipcode'],
        ]);

        return redirect('/');

    }

}
