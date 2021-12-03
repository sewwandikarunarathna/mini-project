<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\doctor;
use App\User;
use App\session;
use App\appointment;

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

        $data = appointment::join('users', 'users.id', '=', 'patient_id')
              		->get(['users.firstname', 'users.lastname', 'doctor', 'date', 'session']);

                    //   dd($data);
    return view('receptionist.apptDetails')->with('data', $data);
   
    }

    public function docDetails(){
        $doctors = doctor::all();
        // dd($doctors);
        return view('receptionist.docDetails')->with('doctors', $doctors);
       
    }

    public function viewSessions($id){
        $doctor = doctor::find($id);
        $docSession = session::where('doctor','=',$doctor->firstname . ' ' . $doctor->lastname)->get();
        // dd($docSession);

        return view('receptionist.viewSessions', compact('doctor', 'docSession'));
        // return view('receptionist.viewSessions')->with('doctor', $doctor);
    }

    public function addSession($id){
        $doctor = doctor::find($id);
        return view('addSession')->with('doctor', $doctor);

    }
    public function dailySessions(){
        $today = date('Y-m-d');
        $todaySessions = session::where('date','=',$today)->get();
       
        // dd($todaySessions);
        return view('receptionist.dailySessions', compact('today', 'todaySessions'));
       
    }

    public function patientDetails(){
        $patients = User::all();
        return view('receptionist.patientDetails')->with('patients', $patients);
       
    }

    public function addPatient(){
        return view('receptionist.addPatient');
    }
    public function makeApptRecep(){
        $doctors = doctor::all();
        $patients = User::all();
        return view('receptionist.makeApptRecep', compact('doctors', 'patients'));
       
    }
    public function channelingDetails(){
        
        return view('receptionist.channelingDetails');
        
    }

    public function changePassword(){
        return view('receptionist.changePassword');
        // $currentUser =  auth()->receptionist();
        // dd($currentUser);
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => ['required', 'string', 'max:255'],
            'new_password' => ['required', 'string', 'max:255'],
            'confirm_password' => ['required', 'same:new_password'],
        ]);

        $currentUser = auth()->receptionist();
        dd($currentUser);
        return view('receptionist.updatePassword');

    }

    // public function createAppt(Request $request){
    //     $appt = new appointment;
    //     $appt->patient_id = $request->patient_id;
    //     $appt->doctor = $request->doctor;
    //     $appt->date = $request->date;
    //     $appt->session = $request->session;

    //     $appt->save();
    //     return view('receptionist.makeApptRecep');
    // }

}
