<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddManualDataToTransactionPermit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        for ($i=1;$i<=3;$i++){
            DB::table('transactionpermit')->insert([ //,
                'master_employee_id'=>$i,
                'permit_date'=>'2018-11-08',
                'description'=>'transaction description',
                'input_by'=>'Henry Tanjaya',
                'input_date'=>'2018-11-08',

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

        Schema::drop('TransactionPermit');
    }
}
