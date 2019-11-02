<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // !Session::get('login')
        if($request->session()->has('name') == null){
            return redirect('/login')->with('error','Kamu harus login dulu');

        }else{
            echo $request->session()->get('name');
            return view('/dashboard');
		}
    }

    public function history()
	{
		$data_patient = \App\Patients::all();
		return view('history',['data_patient' => $data_patient]);
    }

    public function create()
	{
		$data_patient = \App\Patients::all();
    	return view('inputData');
    }

    public function created(Request $request)
	{
		\App\Patients::create($request->all());
		// $data_patient = \App\Patients::all();
		// return $request->all();
    	return redirect('/dashboard');
    }
}
