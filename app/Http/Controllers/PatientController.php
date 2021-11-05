<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    return view('patient.makeAppt');
    
    }

    public function channelingDetails(){
        return view('patient.channelingDetails');
        
    }

    public function myAppt(){
        return view('patient.myAppt');
        
    }

    public function myProfile(){
        return view('patient.myProfile');
        
    }

    public function updateProfile(){
        return view('patient.updateProfile');
        
    }

}
