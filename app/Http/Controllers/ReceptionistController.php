<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\User;

class ReceptionistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:receptionist');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    return view('receptionist.apptDetails');
   
    }

    public function docDetails(){
        $doctors = doctor::all();
        // dd($doctors);
        return view('receptionist.docDetails')->with('doctors', $doctors);
       
    }

    public function dailySessions(){
        return view('receptionist.dailySessions');
       
    }

    public function patientDetails(){
        $patients = User::all();
        return view('receptionist.patientDetails')->with('patients', $patients);
       
    }

    public function makeApptRecep(){
        return view('receptionist.makeApptRecep');
       
    }

}
