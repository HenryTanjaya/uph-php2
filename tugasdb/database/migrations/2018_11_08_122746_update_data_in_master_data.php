<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDataInMasterData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        for($i=1;$i<=3;$i++){
            DB::table('MasterSalary')
            ->where('category','change_category'.$i)
            ->update([
                "category" => "new_category_".$i
          ]);
        }
        for($j=1;$j<=3;$j++){
            DB::table('MasterEmployee')
            ->where('id',$j)
            ->update([
                "name" => "nama".$j
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
    }
}
