<?php

use Illuminate\Database\Seeder;

class BankDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // admin
         DB::table('bank_details')->insert([
            'user_id' => '1',
            'bank' => 'Australian Bank',
            'account_name' => 'Rachel Newman',
            'bsb' => 'Lorem Ipsum Dolor',
            'account_number' => '0987654321',
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);

        // user
        DB::table('bank_details')->insert([
            'user_id' => '2',
            'bank' => 'National Bank',
            'account_name' => 'Nash Nacpil',
            'bsb' => 'Corpus Exa Dagon',
            'account_number' => '9287321654',
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(),  
        ]);
    }
}
