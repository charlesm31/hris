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
Route::get('/', function () {
    return view('welcome');
})->middleware('guest')->name('home');


//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
    

// Authentication Routes
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@create');
Route::get('/logout', 'AuthController@destroy');

Route::resource('/users', 'UsersController');
Route::resource('/user/details', 'UserDetailsController');
Route::resource('/profile', 'ProfileController');



    


   



