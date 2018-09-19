<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionv2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionv2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('q_id');
            $table->string('id_form');
            $table->longText('ask');
            $table->string('q_subpart');
            $table->string('id_part');
            $table->string('point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionv2');
    }
}
