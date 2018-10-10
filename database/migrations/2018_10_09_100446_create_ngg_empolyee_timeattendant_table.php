<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggEmpolyeeTimeattendantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_empolyee_timeattendant', function (Blueprint $table) {
            $table->increments('net_id');
            $table->integer('net_employee_id');
            $table->integer('net_sick_leave');
            $table->integer('net_personal_leave');
            $table->integer('net_late');
            $table->integer('net_miss_work');
            $table->integer('net_annual_leave');
            $table->tinyInteger('net_enable')->default('1');
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
        Schema::dropIfExists('ngg_empolyee_timeattendant');
    }
}
