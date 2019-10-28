<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDoctor;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request){

        $name = $request->input('name');
        $reg = new ModelDoctor;
        $reg->name = $request->input('name');
        $reg->email = $request->input('email');
        $reg->password = $request->input('password');
        // $reg->docId = Str::random(32);
        $reg->docId = mt_rand(1000,9999);
        $reg->save();

        // $checkDoc = ModelDoctor::selectRaw("Count(*) as Total")
        // ->where("name", $name)->first();

        // if(intval($checkDoc->Total) !== null){
            // ModelDoctor::create($request->all());
            $request->session()->set('name', $name);
            return redirect('/dashboard');
        // }

    }
}
