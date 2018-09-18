<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsOperateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_ans_operate_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->interger('id_employ');

            $table->char('position', 100)->nullable();
            $table->char('department', 100)->nullable();
            $table->char('starttime', 100)->nullable();
            $table->char('endtime', 100)->nullable();
            $table->char('number', 100)->nullable();
            $table->char('date_60', 100)->nullable();
            $table->char('date_90', 100)->nullable();
            $table->interger('chioce1')->nullable();
            $table->interger('chioce2')->nullable();
            $table->interger('chioce3')->nullable();
            $table->interger('chioce4')->nullable();
            $table->interger('chioce5')->nullable();
            $table->interger('chioce6')->nullable();
            $table->interger('chioce7')->nullable();
            $table->interger('chioce8')->nullable();
            $table->interger('chioce9')->nullable();
            $table->interger('chioce10')->nullable();
            $table->interger('chioce11')->nullable();
            $table->interger('chioce12')->nullable();
            $table->interger('chioce13')->nullable();
            $table->interger('chioce14')->nullable();
            $table->interger('chioce15')->nullable();
            $table->interger('subtotal_60')->nullable();
            $table->interger('subtotal_90')->nullable();
            $table->interger('subtotal_final')->nullable();


            $table->char('startwork_60')->nullable();
            $table->char('endwork_60')->nullable();

            $table->interger('sick_leave_60')->nullable();
            $table->interger('errand_leave_60')->nullable();
            $table->interger('absence_60')->nullable();
            $table->interger('vacation_60')->nullable();
            $table->interger('line_terms_60')->nullable();
            $table->interger('line_min_60')->nullable();

            $table->char('startwork_90', 100)->nullable();
            $table->char('endtwork_90', 100)->nullable();


            $table->interger('sick_leave_90')->nullable();
            $table->interger('errand_leave_90')->nullable();
            $table->interger('absence_90')->nullable();
            $table->interger('vacation_90')->nullable();
            $table->interger('line_terms_90')->nullable();
            $table->interger('line_min_90')->nullable();













            $table->char('name_rate', 100);
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
        Schema::dropIfExists('_ans_operate_staff');
    }
}
