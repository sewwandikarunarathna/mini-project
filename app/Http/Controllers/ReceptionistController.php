<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('receptionist.docDetails');
       
    }

    public function dailySessions(){
        return view('receptionist.dailySessions');
       
    }

    public function patientDetails(){
        return view('receptionist.patientDetails');
       
    }

    public function makeApptRecep(){
        return view('receptionist.makeApptRecep');
       
    }

}
