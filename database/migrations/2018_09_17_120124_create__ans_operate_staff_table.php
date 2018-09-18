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

            $table->char('position', 100);
            $table->char('department', 100);
            $table->char('starttime', 100);
            $table->char('endtime', 100);
            $table->char('number', 100);
            $table->char('date_60', 100);
            $table->char('date_90', 100);
            $table->interger('chioce1');
            $table->interger('chioce2');
            $table->interger('chioce3');
            $table->interger('chioce4');
            $table->interger('chioce5');
            $table->interger('chioce6');
            $table->interger('chioce7');
            $table->interger('chioce8');
            $table->interger('chioce9');
            $table->interger('chioce10');
            $table->interger('chioce11');
            $table->interger('chioce12');
            $table->interger('chioce13');
            $table->interger('chioce14');
            $table->interger('chioce15');
            $table->interger('subtotal_60');
            $table->interger('subtotal_90');
            $table->interger('subtotal_final');


            $table->char('startwork_60');
            $table->char('endwork_60');

            $table->interger('sick_leave_60');
            $table->interger('errand_leave_60');
            $table->interger('absence_60');
            $table->interger('vacation_60');
            $table->interger('line_terms_60');
            $table->interger('line_min_60');

            $table->char('startwork_90', 100);
            $table->char('endtwork_90', 100);


            $table->interger('sick_leave_90');
            $table->interger('errand_leave_90');
            $table->interger('absence_90');
            $table->interger('vacation_90');
            $table->interger('line_terms_90');
            $table->interger('line_min_90');












            
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
