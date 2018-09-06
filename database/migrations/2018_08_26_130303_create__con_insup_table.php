<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConInsupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_con_insup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_personal')->nullable();
            $table->integer('chioce')->nullable();
            $table->integer('score');
            $table->integer('group')->nullable();;
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
        Schema::dropIfExists('_con_insup');
    }
}
