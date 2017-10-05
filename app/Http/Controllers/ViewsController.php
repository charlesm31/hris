<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => ['home']]);        
        $this->middleware('auth', ['except' => ['home']]);
    }

    public function home()
    {       
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function employees()
    {
        return view('employees');
    }

    public function profile()
    {
        return view('profile');
    }

    
}
