<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair', function (Blueprint $table) 
        {
         $table->increments('id');
         $table->string('date')->nullable();
         $table->string('type')->nullable();
         $table->string('status')->nullable();
         $table->string('no')->nullable();
         $table->string('pib')->nullable();
         $table->string('tel')->nullable();
         $table->string('adress')->nullable();
         $table->string('model')->nullable();
         $table->string('prod')->nullable();
         $table->string('maister')->nullable();
         $table->string('misze')->nullable();
         $table->string('other')->nullable();
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
        Schema::drop('repair');
    }
}
