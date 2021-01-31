<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\VerifyUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
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

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));


        return redirect('/');

    }

        public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->email_verified_at) {
                $verifyUser->user->email_verified_at = \Carbon\Carbon::now();
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('status', $status);
    }


}
