<?php

namespace App\Http\Controllers;

use App\ModelDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Patients;
use Illuminate\View\View;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\Charts\UserChart;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // !Session::get('login')
        if($request->session()->has('name') == null){
            return redirect('/login')->with('error','Kamu harus login dulu');

        }else{
            $name = $request->session()->get('name');
            $email = $request->session()->get('email');
            $data = ModelDoctor::where('email',$email)->get();

            $patient = Patients::all()->take(10);

            $docChart = new UserChart;
            $docChart->labels(['Jan', 'Feb', 'Mar']);
            $docChart->dataset('Users by trimester', 'line', [10, 25, 13]);

            return view('/dashboard', ['data' => $data,
            'patients' => $patient,
            'usersChart' => $docChart ]);
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
        $req = new Patients;

        $sistol = $request->input('sistol');
        $diastol = $request->input('diastol');

        if($sistol < 120 && $diastol < 80){
            $status = 'normal';
        }
        elseif ($sistol >= 120 && $diastol >= 80) {
            $status = 'pra-hipertensi';
        }
        elseif ($sistol >= 140 && $diastol >= 90) {
            $status = 'hipertensi';
        }

        // Patients::create($request->all());
        $req->name = $request->input('name');
        $req->place_of_birth = $request->input('place_of_birth');
        $req->date_of_birth = $request->input('date_of_birth');
        $req->gender = $request->input('gender');
        $req->address = $request->input('address');
        $req->history_of_disease = $request->input('history_of_disease');
        $req->sistol = $request->input('sistol');
        $req->diastol = $request->input('diastol');
        $req->status = $status;
        $req->save();

        $name = $request->session()->get('name');
        // return redirect('/dashboard')-with('session',$name);
    	return redirect('/dashboard')->with('success', 'Added Patient Complete');
    }

    public function profile(Request $request){

        $email = $request->session()->get('email');
        $data = ModelDoctor::where('email',$email)->get();

        return view('profile', ['doctor' => $data]);
    }

    public function updateProfile(Request $request){

        $email = $request->session()->get('email');
        $data = ModelDoctor::where('email',$email)->get();

        return redirect('/profile')->with(['doctor' => $data]);
    }
}
