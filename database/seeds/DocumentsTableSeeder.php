<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('documents')->insert([
            'user_id'                   => '1',
            'contract'                  => '/dummy_files/Awesome.pdf',
            'super_form'                => '/dummy_files/Awesome.pdf',           
            'tfn_declartion'            => '/dummy_files/Awesome.pdf',
            'privacy_sign_off_sheet'    => '/dummy_files/Awesome.pdf',
            'scanned_copy'              => '/dummy_files/Awesome.pdf',
            "created_at"                => \Carbon\Carbon::now(), 
            "updated_at"                => \Carbon\Carbon::now(),  
        ]);

        // user
        DB::table('documents')->insert([
            'user_id'                   => '2',
            'contract'                  => '/dummy_files/Awesome.pdf',
            'super_form'                => '/dummy_files/Awesome.pdf',           
            'tfn_declartion'            => '/dummy_files/Awesome.pdf',
            'privacy_sign_off_sheet'    => '/dummy_files/Awesome.pdf',
            'scanned_copy'              => '/dummy_files/Awesome.pdf',
            "created_at"                => \Carbon\Carbon::now(), 
            "updated_at"                => \Carbon\Carbon::now(),  
        ]);
    }
}
