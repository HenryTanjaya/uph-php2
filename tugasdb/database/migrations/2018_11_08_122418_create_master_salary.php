<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterSalary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MasterSalary', function (Blueprint $table) {
          $table->increments('id');
          $table->string('category');
          $table->integer('maximum_salary');
          $table->string('description');
          $table->string('input_by');
          $table->date('input_date');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('MasterSalary');
    }
}
