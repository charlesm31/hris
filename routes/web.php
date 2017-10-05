<?php


// App Views
Route::get('/', 'ViewsController@home')->name('home');
Route::get('dashboard', 'ViewsController@dashboard')->name('dashboard');
Route::get('employees', 'ViewsController@employees')->name('employees');
Route::get('profile', 'ViewsController@profile')->name('profile');


// Custom Authentication
Route::match(['get','post'], '/login', 'SessionsController@login')->name('login');
Route::get('logout', 'SessionsController@logout');


// Restful Endpoints
Route::resource('user/profile', 'ProfileController'); 
Route::resource('users', 'UsersController');






    


   



