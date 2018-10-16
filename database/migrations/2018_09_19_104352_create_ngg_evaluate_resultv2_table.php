<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggEvaluateResultv2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_evaluate_resultv2', function (Blueprint $table) {
             $table->increments('nes_id');
            $table->integer('nes_q_id');
            $table->integer('nes_q_form');
            $table->integer('nes_q_point');
            $table->integer('nes_evaluate_employee_id');
            $table->tinyInteger('nes_enable')->default('1');
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
        Schema::dropIfExists('ngg_evaluate_resultv2');
    }
}
