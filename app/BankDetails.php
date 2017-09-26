<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetails extends Model
{

    /**
     * The attributes that are hidden.
     *
     * @var array
     */
     protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];  
       

    /**
     * Get the user record associated with the bank details.
     */
     public function user()
     {
         return $this->hasOne('App\User');
     }
}
