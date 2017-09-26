<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{   
    public function index()
    {
       return redirect()->home(); 
    }
    

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
        
            // Validate the request
            $this->validate(request(), [
                'user'  => 'required',
                'password'  => 'required'
            ]);

            
            //  Login User
            if (Auth::attempt(array('username' => $request->user, 'password' => $request->password))) {
                return redirect('/dashboard');
            }

            elseif (Auth::attempt(array('email' => $request->user, 'password' => $request->password))) {
                return redirect('/dashboard');
            }

            else { 
                return redirect()->back()->with('message', 'Invalid credentials');
            }
        }        

    }


    public function destroy(Request $request) 
    {
        Auth::logout();
        return redirect()->home();
    }
}
