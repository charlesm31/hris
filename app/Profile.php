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
    protected $guarded = [''];
    protected $hidden = ['id', 'user_id', 'store_id'];
    protected $dates = ['date'];

    
    /**
     * Get the user record associated with the profile.
     */
     public function user()
     {
         return $this->belongsTo('App\User');
     }

}
