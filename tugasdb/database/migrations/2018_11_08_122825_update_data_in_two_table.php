<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDataInTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      for($i=1;$i<=3;$i++){
          DB::table('MasterSalary')
          ->where('category','change_category'.$i)
          ->update([
              "category" => "changed".$i
      ]);
      }
      for($i=1;$i<=3;$i++){
          DB::table('MasterEmployee')
          ->where('id',$i)
          ->update([
              "name" => "new_category".$i
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

    }
}
