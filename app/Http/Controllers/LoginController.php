<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDoctor;

class LoginController extends Controller
{
    public function login(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $checkDoc = ModelDoctor::selectRaw("Count(*) as Total")
        ->where("email", $email)->first();

        if(intval($checkDoc->Total) > 0){
            $getPass = ModelDoctor::select("password")
            ->where("email","=", $email)->first();
            // $getPass = ModelDoctor::where('email','=',$email)
            // ->get('password');
            if(password_verify($password,$getPass->password)){
                $request->session()->set('name', $name);
                return redirect('/dashboard');
            }else{
                return redirect('/login')->with('error','The password or email is wrong.');
            }
        }else{
            return redirect('/login')->with('error','There is no account with the email.');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}
