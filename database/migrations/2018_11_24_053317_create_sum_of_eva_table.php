<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSumOfEvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sum_of_eva', function (Blueprint $table) {
            $table->increments('soe_id');
            $table->char('soe_name_is_employee',200);
            $table->char('soe_name_by_employee',200);
            $table->integer('soe_point');
            $table->char('soe_form',200);
            $table->tinyInteger('soe_enable')->default('1');
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
        Schema::dropIfExists('sum_of_eva');
    }
}
