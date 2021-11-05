<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        //attempt to log the admin in
        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)){
        //if successful, redirect to the page
            return redirect()->intended(route('admin.dashboard'));

        }
 
        //if unsuccessful, redirect back to the admin login 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
