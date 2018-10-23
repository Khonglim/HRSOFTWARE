<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNggEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngg_employee', function (Blueprint $table) {
            $table->increments('nem_id');
            $table->string('nem_code');
            $table->string('nem_id_card',20);
            $table->string('nem_thai_title',50);
            $table->string('nem_thai_firstname',200);
            $table->string('nem_thai_lastname',200);
            $table->string('nem_eng_title',50);
            $table->string('nem_eng_firstname',200);
            $table->string('nem_eng_lastname',200);
            $table->string('nem_nickname');
            $table->date('nem_birthday');
            $table->tinyInteger('nem_company_id');
            $table->tinyInteger('nem_position_id');
            $table->tinyInteger('nem_department_id');
            $table->tinyInteger('nem_sector_id');
            $table->tinyInteger('nem_level_id');
            $table->string('nem_remark')->nullable();
            $table->tinyInteger('nem_enable')->default('1');
            $table->tinyInteger('recheck_conduct')->default('0');
            $table->tinyInteger('recheck_Oper')->default('0');
            $table->tinyInteger('recheck_Oper_90')->default('0');
            $table->tinyInteger('degree')->default('0');
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
        Schema::dropIfExists('ngg_employee');
    }
}
