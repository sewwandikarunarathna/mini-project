<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    return view('admin.empRegister');
    // return view('home');
    }

    public function doctors(){
        return view('admin.doctorList');
    }

    public function addEmployees(){
        return view('admin.addEmp');
    }

    public function updateEmployees(){
        return view('admin.updateEmp');
    }

    public function addDoctor(){
        return view('admin.addDoctor');
    }

    public function updateDoctor(){
        return view('admin.updateDoctor');
    }

    public function patientList(){
        return view('admin.patientList');
    }

    public function addPatient(){
        return view('admin.addPatient');
    }
}
