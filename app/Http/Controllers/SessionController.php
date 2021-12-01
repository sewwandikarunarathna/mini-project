<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;

use App\session;
use App\appointment;

class SessionController extends Controller
{
    public function search(){
        $q = Request::get ( 'date' );
        $data = session::where('date','LIKE','%'.$q.'%')->get();

        $datas = [];
        foreach($data as $a){
            // echo($a->doctor);
            // echo("<br>");
            $count = appointment::where('session','=',$a->session)->where('doctor','=',$a->doctor)->count();
            if($count < $a->patient_limit){
                $a->status = 0;
            } else $a->status = 1;

            $a->save();
            // return view('patient.channelingDetails')->with('a', $a);
            array_push($datas, $a);
            // echo($count) . "<br>";
        }
        
        // dd($datas);
        if(count($datas) > 0)
        return view('patient.channelingDetails')->withDetails($datas)->withQuery ( $q );
    else return view ('patient.channelingDetails')->withMessage('No Details found. Try to search again !');
    }

    public function getCount(){
        $apt = appointment::all();
        $test = appointment::all()->count();
        $s = session::all();
        // $sew = $s->session;
        // $count= 0;
        // for ($i=0; $i < $apt->count() ; $i++) { 
        //     echo($apt($i)->patient_id);
        // }
        //         $word = appointment::where('patient_id', '<=', $correctedComparisons)->get();
        // $wordlist= $word->count();

        foreach($s as $a){
            // echo($a->doctor);
            // echo("<br>");
            $count = appointment::where('session','=',$a->session)->where('doctor','=',$a->doctor)->count();
            if($count < $a->patient_limit){
                $a->status = 0;
            } else $a->status = 1;

            $a->save();
            return view('patient.channelingDetails')->with('a', $a);
            // dd($a);
            // echo($count) . "<br>";
        }
     

        // dd($count);
        // return view('patient.myAppt');

    }
}
