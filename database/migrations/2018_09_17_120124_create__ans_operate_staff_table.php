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
            $table->integer('id_posinal');
            $table->integer('id_employ');
            $table->char('position', 100)->nullable();
            $table->char('department', 100)->nullable();
            $table->char('degree', 100)->nullable();
            $table->char('starttime', 100)->nullable();
            $table->char('endtime', 100)->nullable();
            $table->char('number', 100)->nullable();
            $table->char('date_60', 100)->nullable();
            $table->char('date_90', 100)->nullable();
            $table->integer('chioce1_60')->nullable();
            $table->integer('chioce2_60')->nullable();
            $table->integer('chioce3_60')->nullable();
            $table->integer('chioce4_60')->nullable();
            $table->integer('chioce5_60')->nullable();
            $table->integer('chioce6_60')->nullable();
            $table->integer('chioce7_60')->nullable();
            $table->integer('chioce8_60')->nullable();
            $table->integer('chioce9_60')->nullable();
            $table->integer('chioce10_60')->nullable();
            $table->integer('chioce11_60')->nullable();
            $table->integer('chioce12_60')->nullable();
            $table->integer('chioce13_60')->nullable();
            $table->integer('chioce14_60')->nullable();
            $table->integer('chioce15_60')->nullable();
            $table->integer('subtotal_60')->nullable();
            $table->integer('rate_60')->nullable();
            $table->integer('rate_90')->nullable();
            $table->integer('rate_all')->nullable();
            $table->string('comments_60',500)->nullable();
            $table->string('comments_featured',500)->nullable();
            $table->string('comments_weakness',500)->nullable();

            
            $table->char('name_rate_60', 100)->nullable(); 

            $table->integer('chioce1_90')->nullable();
            $table->integer('chioce2_90')->nullable();
            $table->integer('chioce3_90')->nullable();
            $table->integer('chioce4_90')->nullable();
            $table->integer('chioce5_90')->nullable();
            $table->integer('chioce6_90')->nullable();
            $table->integer('chioce7_90')->nullable();
            $table->integer('chioce8_90')->nullable();
            $table->integer('chioce9_90')->nullable();
            $table->integer('chioce10_90')->nullable();
            $table->integer('chioce11_90')->nullable();
            $table->integer('chioce12_90')->nullable();
            $table->integer('chioce13_90')->nullable();
            $table->integer('chioce14_90')->nullable();
            $table->integer('chioce15_90')->nullable();

            $table->integer('subtotal_90')->nullable();
            $table->integer('subtotal_final')->nullable();

            $table->string('comments_90',500)->nullable();

            $table->char('experimental',100)->nullable();
            $table->char('experimental_date',100)->nullable(); 

            $table->char('full_time_worker',100)->nullable(); 
            $table->char('full_time_worker_date',100)->nullable(); 
            $table->char('full_time_worker_position',100)->nullable(); 


            $table->char('modify',100)->nullable(); 
            $table->char('modify_position1',100)->nullable(); 
            $table->char('modify_position2',100)->nullable(); 
            $table->char('modify_date',100)->nullable(); 
            
            $table->char('other_90',100)->nullable(); 
            $table->char('other_com_90',100)->nullable(); 
            $table->char('name_rate_90', 100)->nullable(); 


            $table->integer('chioce_suitability1')->nullable(); 
            $table->integer('chioce_suitability2')->nullable(); 
            $table->integer('chioce_suitability3')->nullable(); 
            $table->integer('chioce_suitability4')->nullable(); 
            $table->integer('chioce_suitability5')->nullable(); 
            $table->integer('chioce_suitability6')->nullable(); 
            $table->integer('chioce_suitability7')->nullable(); 
            $table->integer('chioce_suitability8')->nullable(); 
            $table->integer('chioce_suitability9')->nullable(); 
            $table->integer('chioce_suitability10')->nullable(); 

            $table->integer('chioce_suitability11')->nullable(); 
            $table->integer('chioce_suitability12')->nullable(); 
            $table->integer('chioce_suitability13')->nullable(); 
            $table->integer('chioce_suitability14')->nullable(); 
            $table->integer('chioce_suitability15')->nullable(); 
            $table->integer('chioce_suitability16')->nullable(); 
            $table->integer('chioce_suitability17')->nullable(); 
            $table->integer('chioce_suitability18')->nullable(); 
            $table->integer('chioce_suitability19')->nullable(); 
            $table->integer('chioce_suitability20')->nullable(); 


            $table->integer('chioce_suitability21')->nullable(); 
            $table->integer('chioce_suitability22')->nullable(); 
            $table->integer('chioce_suitability23')->nullable(); 
            $table->integer('chioce_suitability24')->nullable(); 
            $table->integer('chioce_suitability25')->nullable(); 
            $table->integer('chioce_suitability26')->nullable(); 
            $table->integer('chioce_suitability27')->nullable(); 
            $table->integer('chioce_suitability28')->nullable(); 
            $table->integer('chioce_suitability29')->nullable(); 
            $table->integer('chioce_suitability30')->nullable(); 


            $table->integer('sum_chioce_suitability10')->nullable(); 

            $table->string('comment_suitability10',500)->nullable(); 
            $table->string('ok_suitability',30)->nullable(); 
            $table->string('other_suitability',20)->nullable(); 
            $table->string('other_com_suitability',500)->nullable();
           
            $table->string('namerate_suitability',50)->nullable(); 

            $table->integer('conclusions')->nullable(); 
            $table->integer('results_manager')->nullable(); 

            $table->char('human_resource_ok',100)->nullable();

            $table->char('human_resource_modi',100)->nullable();
            $table->char('human_resource_nodi',100)->nullable();

            $table->char('human_resource_commo',100)->nullable();
            $table->char('human_resource_comno',100)->nullable();

            $table->char('human_resource_adjust',100)->nullable();
            $table->char('human_resource_posi',100)->nullable();

            $table->char('human_resource_fail',100)->nullable();
            $table->char('human_resource_date',100)->nullable();
           
            $table->char('human_resource_other',100)->nullable();
            $table->char('human_resource_othercom',100)->nullable();
            $table->char('human_resource_nre',100)->nullable();
            

            $table->char('manager_resource_ok',100)->nullable();

            $table->char('manager_resource_modi',100)->nullable();
            $table->char('manager_resource_nodi',100)->nullable();

            $table->char('manager_resource_comdi',100)->nullable();
            $table->char('manager_resource_comno',100)->nullable();

            $table->char('manager_resource_adjust',100)->nullable();
            $table->char('manager_resource_posi',100)->nullable();

            $table->char('manager_resource_fail',100)->nullable();
            $table->char('manager_resource_date',100)->nullable();
           
            $table->char('manager_resource_other',100)->nullable();
            $table->char('manager_resource_othercom',100)->nullable();
            $table->char('manager_resource_nre',100)->nullable();



           








            $table->char('startwork_60',100)->nullable();
            $table->char('endwork_60',100)->nullable();
            $table->integer('sick_leave_60')->nullable();
            $table->integer('errand_leave_60')->nullable();
            $table->integer('absence_60')->nullable();
            $table->integer('vacation_60')->nullable();
            $table->integer('line_terms_60')->nullable();
            $table->integer('line_min_60')->nullable();

            $table->char('startwork_90', 100)->nullable();
            $table->char('endtwork_90', 100)->nullable();
            $table->integer('sick_leave_90')->nullable();
            $table->integer('errand_leave_90')->nullable();
            $table->integer('absence_90')->nullable();
            $table->integer('vacation_90')->nullable();
            $table->integer('line_terms_90')->nullable();
            $table->integer('line_min_90')->nullable();
            $table->tinyInteger('ngg_enable')->default('1');
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
