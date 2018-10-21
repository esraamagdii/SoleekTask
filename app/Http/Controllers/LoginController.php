<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){

        $this->middleware('guest')->except('destroy');
    }
    public function index()
    {
        return view('Sessions.login');
    }

    
    public function store()
    {
        //Attempt to authenticate the user.
        
    	if( ! auth()->attempt(request(['email','password'])) )
    	{

    		//if no, redirec back.
    		return redirect()->back()->withErrors(
    			['message' => 'Please Check your email and password.']
    		);
        }
        
    	return auth()->User()->toArray();
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }

    
}
