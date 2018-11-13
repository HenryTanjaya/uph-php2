<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionPermit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TransactionPermit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('master_employee_id');
            $table->date('permit_date');
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
        Schema::drop('TransactionPermit');
    }
}
