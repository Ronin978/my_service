<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling', function (Blueprint $table) 
        {
         $table->increments('id');
         $table->string('misze')->nullable();
         $table->string('name')->nullable();
         $table->string('article')->nullable();
         $table->string('metric')->nullable();
         $table->string('price')->nullable();
         $table->string('opt')->nullable();
         $table->string('remain')->nullable();
         $table->string('realization')->nullable();
         $table->string('zamovl')->nullable();
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
        Schema::drop('selling');
    }
}
