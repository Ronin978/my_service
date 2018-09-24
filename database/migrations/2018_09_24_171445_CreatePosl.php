<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posl', function (Blueprint $table) 
        {
         $table->increments('id');
         $table->string('posl')->nullable();
         $table->string('kst')->nullable();
         $table->string('vart')->nullable();
         $table->string('gar')->nullable();
         $table->string('type')->nullable();
         $table->string('myid');
         $table->timestamps();
         $table->string('users')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posl');
    }
}
