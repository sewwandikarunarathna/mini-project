<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\User;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    return view('doctor.mySessions');
    
    }

    public function appointments(){
        return view('doctor.appointments');
        
    }

    public function patientProfl(){
        return view('doctor.patientProfl');
            
    }

    public function updatePatientProfile(){
        return view('doctor.updatePatientProfile');
            
    }

    public function makeApptDoc(){
        $doctors = doctor::all();
        $patients = User::all();

        return view('doctor.makeApptDoc', compact('doctors', 'patients'));
            
    }

    public function docProfile(){
        
       $doctr = Auth::user();
    //    $docdata = doctor::all();
    //    dd($user);
    //    dd($docdata);
        return view('doctor.docProfile')->with('docdetail', $doctr);
            
    }
}
