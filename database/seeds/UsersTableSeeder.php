<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'type' => 'admin',
            'password' => bcrypt('secret'),
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);

        // user
        DB::table('users')->insert([
            'username' => 'user',
            'email' => 'user@example.com',
            'type' => 'user',
            'password' => bcrypt('secret'),
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);
    }
}
