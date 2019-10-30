<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatiensController extends Controller
{
	public function index()
	{
		$data_patient = \App\Patients::all();
		return view('viewDataPasien',['data_patient' => $data_patient]);
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

