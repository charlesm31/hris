<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('store_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender', ['Male','Female']);
            $table->enum('role', ['Casual','Fulltime']);
            $table->string('mobile');            
            $table->string('pnumber')->unique();
            $table->string('salary');          
            $table->string('hiring_manager');
            $table->string('tax_file_num');
            $table->date('start_date');
            $table->date('birthday');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postal');
            $table->string('country');
            $table->string('shirt_size');
            $table->string('pants_size');
            $table->string('skirt_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
