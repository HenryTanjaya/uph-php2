<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFakerDataToMasterEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('MasterEmployee')->insert([ //,
                'identity' =>'-',
                'name' => $faker->name,
                'master_salary_id' => $i,
                'identity_card' => 'identity-'.$i,
                'address' => $faker->unique()->email,
                'phone' => $faker->phoneNumber,
                'birth_date' => $faker->dateTime,
                'input_by' => $faker->name,
                'input_date' => $faker->dateTime,
                'created_at' =>$faker->dateTime,
                'updated_at' =>$faker->dateTime,
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
        Schema::drop('MasterEmployee');

    }
}
