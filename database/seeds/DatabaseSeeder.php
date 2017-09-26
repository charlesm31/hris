<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(EmergencyContactsTableSeeder::class);
        $this->call(BankDetailsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
    }
}
