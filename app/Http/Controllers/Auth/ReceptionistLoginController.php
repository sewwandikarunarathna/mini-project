<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ReceptionistLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:receptionist');
    }

    public function showLoginForm(){
        return view('auth.receptionist-login');
    }

    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        //attempt to log the receptionist in
        if(Auth::guard('receptionist')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)){
        //if successful, redirect to the page
            return redirect()->intended(route('recep.dashboard'));

        }
 
        //if unsuccessful, redirect back to the receptionist login 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
