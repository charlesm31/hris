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
            $table->date('start_date');
            $table->string('tax_file_num')->nullable();            
            $table->date('birthday')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal')->nullable();
            $table->string('country')->nullable();
            $table->string('shirt_size')->nullable();
            $table->string('pants_size')->nullable();
            $table->string('skirt_size')->nullable();
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
