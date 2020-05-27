<?php

namespace App\Http\Controllers;

use App\ModelDoctor;
use App\ObatModel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;
use App\Patients;
use Illuminate\View\View;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\Charts\DocChart;
use Illuminate\Support\Str;


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

            $patient = Patients::all()->take(5);

            $docChart = new DocChart;
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

        // $random_key = str_random(32);

        $sistol = $ref->getValue();
        $diastol = $ref1->getValue();

        // return view('inputData')->with('values', $data);
    	return view('inputData',['sistol' => $sistol, 'diastol' => $diastol ]);
    }

    public function created(Request $request)
	{
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();
        // DATABASE FIREBASE PURPOSE^

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
        $req->email = $request->input('email');
        $req->doctor_name = $request->session()->get('name');
        $req->date = $request->input('date');
        $req->gender = $request->input('gender');
        $req->address = $request->input('address');
        $req->deskripsi = $request->input('deskripsi');
        $req->history_of_disease = $request->input('history_of_disease');
        $req->disease = $request->input('disease');
        $req->sistol = $request->input('sistol');
        $req->diastol = $request->input('diastol');
        $req->status = $status;
        $req->save();

        $name = $request->session()->get('name');

        //pushdata to database firebase with random key purpose
        $random_key = Str::random(16);

        // for multiple variable obat
        $email = $request->input('email');
        $patients = Patients::where('email', $email)->get();
        foreach ($patients as $key => $attribute) {
            $id = $attribute->id; //get the patient id
        }

        // if($request->ajax())
        // {
            $rules = array(
                'nama_obat.*'  => 'required'
                );
                $error = Validator::make($request->all(), $rules);
                    if($error->fails())
                    {
                        return response()->json([
                            'error'  => $error->errors()->all()
                        ]);
                    }
    
                $email_pasien = $request->input('email');
    
                $nama_obat = $request->nama_obat;
    
                for($count = 0; $count < count($nama_obat); $count++)
                {
                    $data = array(
                        'nama_obat' => $nama_obat[$count],
                        'user_email' => $email_pasien,
                        'user_id' => $id
                    );
                    $insert_data[] = $data; 
                }
                ObatModel::insert($insert_data);
                // return response()->json([
                //     'success'  => 'Data Added successfully.'
                // ]);
            // }

            //push data to firebase with 'Obat' parent
            $refObat = $database->getReference('Obat');

            for($count = 0; $count < count($nama_obat); $count++)
            {
                $newObat = $refObat
                ->push([
                    'id_check' => trim($random_key) ,
                    // 'user_id' => $id ,
                    'nama_obat' => $nama_obat[$count],
                    'user_email' => $email_pasien ,
                 ]);
            }


        // $refPatient = $database->getReference('Pasien/'.trim($random_key));
        $refPatient = $database->getReference('Pasien');

        $newPatient = $refPatient
        ->push([
        'id_check' => trim($random_key) ,
        'user_id' => $id ,
        'nama' => $req->name ,
        'email' => $req->email ,
        'tempat_lahir' => $req->place_of_birth ,
        'tanggal' => $req->date ,
        'jenis_kelamin' => $req->gender ,
        'nama_dokter' => $req->doctor_name ,
        'alamat' => $req->address ,
        'riwayat_penyakit' => $req->history_of_disease ,
        'deskripsi' => $req->deskripsi ,
        'disease' => $req->disease ,
        'sistol' => $req->sistol ,
        'diastol' => $req->diastol ,
        ]);

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

        $name = $request->input('name');
        $phone = $request->input('phone');

        $data = ModelDoctor::where('email',$email)
        ->update([
            'name' => $name,
            'phone' => $phone
        ]);
        // ModelDoctor::create($request->all());

        return redirect('/profile')->with(['doctor' => $data]);
    }
}
