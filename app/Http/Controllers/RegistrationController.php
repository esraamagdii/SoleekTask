<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('Registration.create');
    }

    
    public function store()
    {
        $this->validate(request(),[
    		'name' => 'required',
    		'email' =>'required|email|unique:users',
    		'password' => 'required|confirmed',
        ]);
        $name = request('name');
        $user = User::create([
            'name' =>  request('name'),
            'email' => request('email'),
            'password' =>bcrypt(request('password'))
        ]);

        auth()->login($user);
        
        return $user->toArray();
    }

}
