<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('error','Kamu harus login dulu');

        }elseif($request->session()->has('nama')){
			echo $request->session()->get('nama');
		}else{
			echo 'Tidak ada data dalam session.';
		}
        return view('/dashboard');
    }
}
