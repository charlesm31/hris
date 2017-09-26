<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // profile for admin
        DB::table('profiles')->insert([
            'user_id'   => '1',
            'store_id'  => '1',
            'firstname' => 'Rachel',
            'lastname'  => 'Newman',
            'gender'    => 'Female',
            'role'      => 'Fulltime',
            'mobile'    => '986123563',
            'pnumber'   => 'P000001',
            'salary'    => '50000',
            'hiring_manager'    => 'John Bennett',
            'tax_file_num'     => '09877656521',
            'start_date'        => \Carbon\Carbon::now(),
            'birthday'          => \Carbon\Carbon::now(),
            'street'    => 'Carindale Store Ground Floor',
            'city'      => 'Brisbane',
            'state'     => 'Queensland',
            'postal'    => '2018',
            'country'   => 'Australia',
            'shirt_size'        => '24',
            'pants_size'        => '27',
            'skirt_size'        => '27',
            "created_at"        => \Carbon\Carbon::now(),
            "updated_at"        => \Carbon\Carbon::now(), 
        ]);

        // profile for user
        DB::table('profiles')->insert([
            'user_id'   => '2',
            'store_id'  => '2',
            'firstname' => 'Nash',
            'lastname'  => 'Nacpil',
            'gender'    => 'Male',
            'role'      => 'Fulltime',
            'mobile'    => '986123563',
            'pnumber'   => 'P000000',
            'salary'    => '30000',
            'hiring_manager'    => 'Trent Brooks',
            'tax_file_num'     => '09877656521',
            'start_date'        => \Carbon\Carbon::now(),
            'birthday'          => \Carbon\Carbon::now(),
            'street'    => 'Carindale Store First Floor',
            'city'      => 'Brisbane',
            'state'     => 'Queensland',
            'postal'    => '2018',
            'country'   => 'Australia',
            'shirt_size'        => '38',
            'pants_size'        => '36',
            'skirt_size'        => '',
            "created_at"        => \Carbon\Carbon::now(),
            "updated_at"        => \Carbon\Carbon::now(), 
        ]);       
    }
}
