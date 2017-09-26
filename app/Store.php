<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * The attributes that are hidden.
     *
     * @var array
     */
     protected $hidden = ['id', 'created_at', 'updated_at'];
     

    /**
     * Get the user record associated with the store.
     */
     public function user()
     {
         return $this->hasOne('App\User');
     }
   
}
