<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;
use DB;

class UsersController extends Controller
{
    protected $user_type;

    public function __construct(){
        $this->middleware('auth');

        // $this->middleware(function ($request, $next){

        //     $this->user_type = Auth::user()->type;

        //     if($this->user_type != 'admin'){
        //         return redirect()->home();
        //     }

        //     return $next($request);
        // });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')
                    ->join('profiles', 'profiles.user_id', '=', 'users.id')
                    ->join('stores', 'stores.id', '=', 'profiles.store_id')
                    ->get(array(
                        'username', 'email', 'type', 'firstname', 'lastname', 'gender', 'mobile',
                        'role', 'stores.name as store', 'pnumber', 'salary', 'start_date','hiring_manager'
                    )); 

        return response()->json([
            'users'     =>  $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
