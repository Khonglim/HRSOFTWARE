<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_choice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('choice1');
            $table->string('choice2');
            $table->string('answer1');
            $table->string('answer2');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_choice');
    }
}
