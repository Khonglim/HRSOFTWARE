<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartofv2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partofv2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_part');
            $table->string('part');
            $table->string('subpart');
            $table->string('title');
            $table->string('id_form');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partofv2');
    }
}
