<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatNggEvaresultComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ngg_evaresult_comment', function (Blueprint $table) {
            $table->increments('nec_id');
            $table->integer('nec_q_id');
            $table->longtext('nec_comment');
            $table->integer('nec_evaluate_employee_id');
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
        //
    }
}
