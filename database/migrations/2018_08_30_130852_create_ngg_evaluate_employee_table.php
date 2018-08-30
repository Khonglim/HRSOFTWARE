<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggEvaluateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_evaluate_employee', function (Blueprint $table) {
            $table->increments('nee_id');
            $table->Integer('nee_is_employee_id');
            $table->Integer('nee_by_employee_id');
            $table->tinyInteger('nee_form_id');
            $table->tinyInteger('nee_enable')->default('1');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngg_evaluate_employee');
    }
}
