<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('doctor.makeApptDoc');
            
    }

    public function docProfile(){
        return view('doctor.docProfile');
            
    }
}
