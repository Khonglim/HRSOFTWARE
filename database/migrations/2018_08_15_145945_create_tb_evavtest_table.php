<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEvavtestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_evavtest', function (Blueprint $table) {
            $table->increments('id');
            $table->char('part1_1');
            $table->char('part1_2');
            $table->char('part1_3');
            $table->char('part1_4');
            $table->char('part1_5');
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
        Schema::dropIfExists('tb_evavtest');
    }
}
