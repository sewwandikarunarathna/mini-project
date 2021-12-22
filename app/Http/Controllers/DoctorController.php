<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\session;
use App\appointment;
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
        $user= Auth::user();
        // dd($userid);
        $mysessions = session::where('doctor','=',$user->firstname . " " . $user->lastname)->get();
        // dd($mysessions);
        return view('doctor.mySessions')->with('mysessions', $mysessions);
    
    }

    public function changePassword(){
        
       
        return view('doctor.changePassword');
    
    }

    public function appointments(){
        $user= Auth::user();
        // dd($userid);
        $data = appointment::join('users', 'users.id', '=', 'patient_id')
        ->where('doctor','=',$user->firstname . " " . $user->lastname)
        ->get(['users.id', 'users.firstname', 'users.lastname', 'doctor', 'date', 'session']);

        $myappt = appointment::where('doctor','=',$user->firstname . " " . $user->lastname)->get();
//         $myappts= $myappt->patient_id;
// dd($data);
        return view('doctor.appointments')->with('myappt', $data);
        
    }

    public function patientProfl($id){
        $user = User::find($id);

        return view('doctor.patientProfl')->with('user', $user);
            
    }

    public function updatePatientProfile($id){
        $user = User::find($id);

        return view('doctor.updatePatientProfile')->with('user', $user);
        // return view('doctor.updatePatientProfile');
            
    }

    public function updateMedicalDetails(Request $request){
        $id = $request->id;

        $data = User::find($id);
        $data->medical_details = $request->medicalDetails;

        $data->save();
        // $datas = User::all();
        return view('doctor.patientProfl')->with('user', $data);

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
