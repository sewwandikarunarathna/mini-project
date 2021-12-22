<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\doctor;
use App\session;
use App\appointment;
use App\User;
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
        $doctors = doctor::all();
        $sessions = session::all();
        $patients = User::all();
    return view('patient.makeAppt', compact('doctors', 'patients'));
    
    }

    // public function createAppt(Request $request){
    //     $appt = new appointment;
    //     $appt->patient_id = $request->patient_id;
    //     $appt->doctor = $request->doctor;
    //     $appt->date = $request->date;
    //     $appt->session = $request->session;

    //     $appt->save();
    //     return redirect()->back();
    // }
    
    public function channelingDetails(){
        return view('patient.channelingDetails');
        
    }

    public function changePassword(){
        return view('patient.changePassword');
    }
    public function myAppt(){
        $userid= Auth::user()->id;
        $myappt = appointment::where('patient_id','=',$userid)->get();
// dd($myappt);
        return view('patient.myAppt')->with('myappt', $myappt);
        
    }

    public function myProfile(){
        $test= Auth::user();
        //dd($test);
        // $detail = User::all();
       // dd($detail);
        return view('patient.myProfile')->with('detail', $test);
        
    }

    public function updateProfile($id){
        $updateProf = Auth::user($id);
        return view('patient.updateProfile')->with('updateprofl', $updateProf);
        
    }

    public function updateeachprofl(Request $request){
        $id= $request->id;
        $newFirstname = $request->newfirstname;
        $newLastname = $request->newlastname;
        $newEmail = $request->newemail;
        $newNic = $request->newnic;
        $newPhone = $request->newphone_no;
        $newBirthday = $request->newbirthday;
        $newGender = $request->newgender;
        $newBlood = $request->newblood;

        $data = Auth::user($id);
        $data->firstname = $newFirstname;
        $data->lastname = $newLastname;
        $data->email = $newEmail;
        $data->nic = $newNic;
        $data->phone_no = $newPhone;
        $data->birthday = $newBirthday;
        $data->gender = $newGender;
        $data->blood_type = $newBlood;

        $data->save();
        $datas = Auth::user();

        return view('patient.myProfile')->with('detail', $datas);

    }

}
