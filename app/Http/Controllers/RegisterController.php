<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDoctor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|min:4|email|unique:doctors',
            'password' => 'required|min:6',
        ]);

        $name = $request->input('name');
        $reg = new ModelDoctor;
        $reg->name = $request->input('name');
        $reg->email = $request->input('email');
        $reg->password = Hash::make($request->input('password'));
        // $reg->docId = Str::random(32);
        $reg->docId = mt_rand(1000,9999);
        $reg->save();

        Session::put('name',$reg->name);
        Session::put('email',$reg->email);
        Session::put('login',TRUE);

        // $checkDoc = ModelDoctor::selectRaw("Count(*) as Total")
        // ->where("name", $name)->first();

        // if(intval($checkDoc->Total) !== null){
            // ModelDoctor::create($request->all());
            // $request->session()->set('name', $name);
            return redirect('/dashboard');
        // }

    }
}
