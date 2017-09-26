<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    /**
     * The attributes that are hidden.
     *
     * @var array
     */
     protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];
     
    /**
    * Get the user record associated with the emergency contact.
    */
    public function user()
    {
        return $this->hasOne('App\User');
    } 
}
