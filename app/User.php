<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'password', 'remember_token',
    ];
    

    /**
    * Get the profile associated with the user.
    */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }  

            
    /**
    * Get the bank details associated with the user.
    */
    public function bankDetails()
    {
        return $this->hasOne('App\BankDetails');
    }  

    /**
    * Get the emergency contact associated with the user.
    */
    public function emergencyContact()
    {
        return $this->hasOne('App\EmergencyContact');
    }  

    /**
    * Get the documents associated with the user.
    */
    public function documents()
    {
        return $this->hasOne('App\Documents');
    }  
   
}
