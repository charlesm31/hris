<?php

use Illuminate\Database\Seeder;

class EmergencyContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('emergency_contacts')->insert([
            'user_id' => '1',
            'name' => 'John Bennett',
            'relation' => 'Boss',
            'mobile' => '0982765125',
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);

        // user
        DB::table('emergency_contacts')->insert([
            'user_id' => '2',
            'name' => 'Chad Dizon',
            'relation' => 'Manager',
            'mobile' => '0976731531',
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);
    }
}
