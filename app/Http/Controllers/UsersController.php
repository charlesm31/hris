<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use DB;
use App\User;
use App\Profile;
use App\Store;
use App\EmergencyContact;
use App\Documents;

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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->input();
        $this->validate($request, [
            // 'username'      => 'required|unique:users',
            // 'email'         => 'required|unique:users',
            // 'password'      => 'required',
            // 'type'          => 'required',
            // 'firstname'     => 'required',
            // 'lastname'      => 'required',
            // 'gender'        => 'required',
            // 'mobile'        => 'required',
            // 'role'          => 'required',
            // 'store'         => 'required',
            // 'pnumber'       => 'required|unique:profiles',
            // 'salary'        => '',
            // 'start_date'    => 'required',
            // 'hiring_manager'    => 'required'
        ]);

        DB::transaction(function () use ($request, &$user_details) {

            $user = User::Create([
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => bcrypt($request['password']),
                'type' => $request->input('type'),
            ]);

            $profile = Profile::Create([
                'user_id'       => $user->id,
                'store_id'      => $request->input('store'),
                'firstname'     => $request->input('firstname'),
                'lastname'      => $request->input('lastname'),
                'gender'        => $request->input('gender'),
                'mobile'        => $request->input('mobile'),
                'role'          => $request->input('role'),
                'store_id'         => $request->input('store'),
                'pnumber'       => $request->input('pnumber'),
                'salary'        => $request->input('salary'),
                'start_date'    => Carbon::parse($request->input('start_date')),
                'hiring_manager'    => $request->input('hiring_manager'),
            ]);

            json_encode($user_details = array_merge($user->toArray(), $profile->toArray()));            
        });

        return response()->json([
            'message'   => 'User created successfully:',
            'user'      => $user_details,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
