<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDoctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $data = ModelDoctor::where('email',$email)->first();
        if($data != null){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/dashboard');
            }
            else{
                return redirect()->back()->with('error','The password or email is wrong.');
            }
        }
        else{
            return redirect()->back()->with('error','There is no account with the email.');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
