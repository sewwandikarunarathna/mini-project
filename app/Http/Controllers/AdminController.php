<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\doctor;
use App\User;
use App\receptionist;
use App\session;

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
        $emps = receptionist::all();

    return view('admin.empRegister')->with('emps', $emps);
    // return view('home');
    }

    public function doctors(){
        $doctors = doctor::all();

        return view('admin.doctorList')->with('doctors', $doctors);
    }

    public function addEmployees(){
        return view('admin.addEmp');
    }

    public function saveEmployee(Request $request){
        $emp = new receptionist;

        $emp->firstname = $request->emp_firstname;
        $emp->lastname = $request->emp_lastname;
        $emp->email = $request->emp_email;
        $emp->nic = $request->emp_nic;
        $emp->phone_no = $request->emp_phone_no;
        $emp->password = Hash::make($request['password']);

        $emp->save();
        return redirect()->back();

    }

    public function updateEmployees($id){
        $updateEmp = receptionist::find($id);

        return view('admin.updateEmp')->with('upemp', $updateEmp);
    }

    public function updateeachemployee(Request $request){
        $id = $request->id;
        $data = receptionist::find($id);

        $data->firstname = $request->emp_firstname;
        $data->lastname = $request->emp_lastname;
        $data->email = $request->emp_email;
        $data->nic = $request->emp_nic;
        $data->phone_no = $request->emp_phone_no;

        $data->save();
        $datas = receptionist::all();
        return view('admin.empRegister')->with('emps', $datas);

    }

    public function addDoctor(){
        return view('admin.addDoctor');
    }

    public function saveDoctor(Request $request){
        $doctor= new doctor;

        $doctor->firstname = $request->doc_firstname;
        $doctor->lastname = $request->doc_lastname;
        $doctor->speciality = $request->speciality;
        $doctor->working_hospital = $request->work_hosptl;
        $doctor->email = $request->doc_email;
        $doctor->phone_no = $request->doc_phone_no;
        $doctor->password = Hash::make($request['password']);

        $doctor->save();
        return redirect()->back();
    }
    public function updateDoctor($id){
        $updateDoc = doctor::find($id);

        return view('admin.updateDoctor')->with('updoctor', $updateDoc);
    }

    public function updateeachdoctor(Request $request){
        $id = $request->id;
        $newFirstname = $request->newfirstname;
        $newLastname = $request->newlastname;
        $newSpecial = $request->newspeciality;
        $newHosp = $request->newhospital;
        $newEmail = $request->newemail;
        $newPhone = $request->newphone_no;

        $data = doctor::find($id);

        $data->firstname = $newFirstname;
        $data->lastname = $newLastname;
        $data->speciality = $newSpecial;
        $data->working_hospital = $newHosp;
        $data->email = $newEmail;
        $data->phone_no = $newPhone;

        $data->save();
        $datas = doctor::all();

        return view('admin.doctorList')->with('doctors', $datas);
    }

    public function patientList(){
        $patients = User::all();
        return view('admin.patientList')->with('patients', $patients);
    }

    public function addPatient(){
        return view('admin.addPatient');
    }

    public function viewSession($id){
        $doctor = doctor::find($id);
        $docSession = session::where('doctor','=',$doctor->firstname . ' ' . $doctor->lastname)->get();
        // dd($docSession);

        return view('admin.viewSession', compact('doctor', 'docSession'));

    }
}
