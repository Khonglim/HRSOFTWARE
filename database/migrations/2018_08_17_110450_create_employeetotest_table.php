<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeetotestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeetotest', function (Blueprint $table) {
            $table->increments('nee_id');
            $table->string('nee_is_employee');
            $table->string('nee_by_employee');
            $table->string('nee_id_form');
            $table->boolean('nee_recheck')->default(true);
            $table->tinyInteger('nee_enable')->default('1');
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
        Schema::dropIfExists('employeetotest');
    }
}
