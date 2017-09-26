<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Welcome Page  
Route::get('/', function () { return view('welcome'); })->middleware('guest')->name('home');


// Custom Authentication Routes
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@create');
Route::get('/logout', 'AuthController@destroy');


// Secured Routes
Route::group(['middleware' => ['auth']], function () {

    // Views
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/profile', function () { return view('profile'); })->name('profile');
    Route::get('/employees', function () { return view('employees.index'); })->name('employees');
    Route::get('/employee/create', function () { return view('employees.create'); })->name('createEmployee');


    // Restful Resources
    Route::resource('/user/details', 'UserDetailsController'); 
    Route::resource('/users', 'UsersController');
    
});






    


   



