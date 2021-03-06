<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function doctors()
    {
        $doctors = doctor::all();
        return view('doctors')->with('doctors', $doctors);
    }
    public function aboutus(){
        return view('aboutus');

    }

    public function contactus(){
        return view('contactus');

    }
}
