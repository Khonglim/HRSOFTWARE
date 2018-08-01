<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id_history');
            $table->char('list_of_employed1');
            $table->char('job_description1');
            $table->char('call1');
            $table->char('start_job_duration1');
            $table->char('end_job_duration2');
            $table->char('position1');
            $table->char('reasonLeaving1');
            $table->char('lastsalary1');

            $table->char('list_of_employed2');
            $table->char('call2');
            $table->char('job_description2');
            $table->char('start_job_duration3');
            $table->char('end_job_duration4');
            $table->char('position2');
            $table->char('reasonLeaving2');
            $table->char('lastsalary2');

            $table->char('list_of_employed3');
            $table->char('call3');
            $table->char('job_description3');
            $table->char('start_job_duration5');
            $table->char('end_job_duration6');
            $table->char('position3');
            $table->char('reasonLeaving3');
            $table->char('lastsalary3');


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
        Schema::dropIfExists('history');
    }
}
