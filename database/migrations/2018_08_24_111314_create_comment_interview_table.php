<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentInterviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_interview', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_posinal');
            $table->integer('chioce')->nullable();
            $table->string('comment_interview')->nullable();
            $table->tinyInteger('comment_enable')->default('1');
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
        Schema::dropIfExists('comment_interview');
    }
}
