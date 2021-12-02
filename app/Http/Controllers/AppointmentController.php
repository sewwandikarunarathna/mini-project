<?php

namespace App\Http\Controllers;
use App\appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function createAppt(Request $request){
        $appt = new appointment;
        $appt->patient_id = $request->patient_id;
        $appt->doctor = $request->doctor;
        $appt->date = $request->date;
        $appt->session = $request->session;

        $appt->save();
        return redirect()->back();
        // return view('patient.channelingDetails');
    }
}
