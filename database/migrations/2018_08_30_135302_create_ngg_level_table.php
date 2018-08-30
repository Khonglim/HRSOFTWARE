<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_level', function (Blueprint $table) {
            $table->increments('nlv_id');
            $table->string('nlv_name',200);
            $table->string('nlv_remark',500);
            $table->tinyInteger('nlv_enable')->default('1');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngg_level');
    }
}
