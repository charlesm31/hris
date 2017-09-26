<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

     /**
     * The attributes that are hidden.
     *
     * @var array
     */
    protected $hidden = ['id', 'user_id', 'store_id'];

    
    /**
     * Get the user record associated with the profile.
     */
     public function user()
     {
         return $this->belongsTo('App\User');
     }

}
