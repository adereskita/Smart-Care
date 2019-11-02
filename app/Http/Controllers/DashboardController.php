<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Patients;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

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
        $data_patient = Patients::all();

		return view('history',['data_patient' => $data_patient]);
    }

    public function create()
	{
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();
        $ref = $database
        ->getReference('Tensimeter/sistol');
        $ref1 = $database
        ->getReference('Tensimeter/diastol');

        $sistol = $ref->getValue();
        $diastol = $ref1->getValue();

        // return view('inputData')->with('values', $data);
    	return view('inputData',['sistol' => $sistol, 'diastol' => $diastol ]);
    }

    public function created(Request $request)
	{
		Patients::create($request->all());
    	return redirect('/dashboard');
    }
}
