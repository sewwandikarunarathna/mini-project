<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    return view('patient.makeAppt');
    
    }

    public function channelingDetails(){
        return view('patient.channelingDetails');
        
    }

    public function myAppt(){
        return view('patient.myAppt');
        
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

        $data = Auth::user($id);
        $data->firstname = $newFirstname;
        $data->lastname = $newLastname;
        $data->email = $newEmail;
        $data->nic = $newNic;
        $data->phone_no = $newPhone;
        $data->birthday = $newBirthday;
        $data->gender = $newGender;

        $data->save();
        $datas = Auth::user();

        return view('patient.myProfile')->with('detail', $datas);

    }

}
