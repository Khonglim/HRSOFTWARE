<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('choice1');
            $table->string('choice2');
            $table->string('choice3');
            $table->string('choice4');
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disc');
    }
}
