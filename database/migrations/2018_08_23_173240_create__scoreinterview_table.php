<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreinterviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_scoreinterview', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_interview');
            $table->integer('score1_interview');
            $table->integer('score2_interview');
            $table->integer('score3_interview');
            $table->integer('score4_interview');
            $table->integer('score5_interview');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_scoreinterview');
    }
}
