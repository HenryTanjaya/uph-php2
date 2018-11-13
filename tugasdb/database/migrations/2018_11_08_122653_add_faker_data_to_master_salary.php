<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFakerDataToMasterSalary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        for ($i=1;$i<=10;$i++){
            DB::table('MasterSalary')->insert([ //,
                'category'=>'category-'.$i,
                'maximum_salary'=>'2000000',
                'description'=>'deskripsi salary',
                'input_by'=>'Henry Tanjaya',
                'input_date'=>'2018-08-11',
            ]);
        }
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
