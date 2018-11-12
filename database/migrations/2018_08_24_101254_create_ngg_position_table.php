<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_position', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nps_name',200);
            $table->char('nps_remark',255)->nullable();
            $table->tinyInteger('nps_enable')->default('1');
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
        Schema::dropIfExists('ngg_position');
    }
}
