<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MasterEmployee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identity');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('input_by');
            $table->date('input_date');
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
        //
        Schema::drop('MasterEmployee');
    }
}
