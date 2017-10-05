<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{         

    public function login(Request $request)
    {   
        // redirect to login if request is get
        if ($request->isMethod('get')) {
            return redirect()->home();        
        }
        

        // validate if request is sent
        $this->validate(request(), [
            'user'  => 'required',
            'password'  => 'required'
        ]);

       
        

        // attempt login
        if (Auth::attempt(array('username' => $request->user, 'password' => $request->password))) {
            return ['message' => 'success'];
        }

        elseif (Auth::attempt(array('email' => $request->user, 'password' => $request->password))) {
            return ['message' => 'success'];
        }

        else { 
            return ['message' => 'Invalid credentials'];
            
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect()->home();
    }
}
