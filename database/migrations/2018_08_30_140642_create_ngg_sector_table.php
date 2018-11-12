<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_sector', function (Blueprint $table) {
            $table->increments('nst_id');
            $table->string('nst_name',200);
            $table->string('nst_remark',500)->nullable();
            $table->tinyInteger('nst_enable')->default('1');
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
        Schema::dropIfExists('ngg_sector');
    }
}
