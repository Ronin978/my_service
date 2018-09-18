<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair', function ($table) {
            $table->string('compl')->after('model')->nullable();
            $table->string('nespr')->after('date')->nullable();
            $table->string('termin')->after('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair', function($table)
        {
          $table->dropColumn('viddil');
        });
    }
}
