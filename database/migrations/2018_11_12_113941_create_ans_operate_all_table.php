<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsOperateAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ans_operate_all', function (Blueprint $table) {
            $table->increments('id');
            
            $table->text('company')->nullable();
            $table->text('first_name')->nullable();
         
            $table->text('new_id_employ');
            $table->text('new_position')->nullable();
            $table->text('new_department')->nullable();
            $table->text('email')->nullable();
            $table->text('id_employ');
            $table->text('numberMN')->nullable();
            $table->text('degree')->nullable();
            $table->text('starttime')->nullable();
            $table->text('endtime')->nullable();
            $table->text('number')->nullable();
            $table->text('date_60')->nullable();
            $table->text('date_90')->nullable();
            $table->text('chioce1_60')->nullable();
            $table->text('chioce2_60')->nullable();
            $table->text('chioce3_60')->nullable();
            $table->text('chioce4_60')->nullable();
            $table->text('chioce5_60')->nullable();
            $table->text('chioce6_60')->nullable();
            $table->text('chioce7_60')->nullable();
            $table->text('chioce8_60')->nullable();
            $table->text('chioce9_60')->nullable();
            $table->text('chioce10_60')->nullable();
            $table->text('chioce11_60')->nullable();
            $table->text('chioce12_60')->nullable();
            $table->text('chioce13_60')->nullable();
            $table->text('chioce14_60')->nullable();
            $table->text('chioce15_60')->nullable();
            $table->text('chioce16_60')->nullable();
            $table->text('chioce17_60')->nullable();
            $table->text('chioce18_60')->nullable();
            $table->text('chioce19_60')->nullable();
            $table->text('chioce20_60')->nullable();
            $table->text('chioce21_60')->nullable();
            $table->text('chioce22_60')->nullable();
            $table->text('chioce23_60')->nullable();
            $table->text('chioce24_60')->nullable();
            $table->text('chioce25_60')->nullable();
            $table->text('subtotal_60')->nullable();
            $table->text('rate_60')->nullable();
            $table->text('rate_90')->nullable();
            $table->text('rate_all')->nullable();
            $table->text('comments_60')->nullable();
            $table->text('comments_featured')->nullable();
            $table->text('comments_weakness')->nullable();


            $table->text('name_rate_60')->nullable();

            $table->text('chioce1_90')->nullable();
            $table->text('chioce2_90')->nullable();
            $table->text('chioce3_90')->nullable();
            $table->text('chioce4_90')->nullable();
            $table->text('chioce5_90')->nullable();
            $table->text('chioce6_90')->nullable();
            $table->text('chioce7_90')->nullable();
            $table->text('chioce8_90')->nullable();
            $table->text('chioce9_90')->nullable();
            $table->text('chioce10_90')->nullable();
            $table->text('chioce11_90')->nullable();
            $table->text('chioce12_90')->nullable();
            $table->text('chioce13_90')->nullable();
            $table->text('chioce14_90')->nullable();
            $table->text('chioce15_90')->nullable();
            $table->text('chioce16_90')->nullable();
            $table->text('chioce17_90')->nullable();
            $table->text('chioce18_90')->nullable();
            $table->text('chioce19_90')->nullable();
            $table->text('chioce20_90')->nullable();
            $table->text('chioce21_90')->nullable();
            $table->text('chioce22_90')->nullable();
            $table->text('chioce23_90')->nullable();
            $table->text('chioce24_90')->nullable();
            $table->text('chioce25_90')->nullable();
        
            $table->text('subtotal_90')->nullable();
            $table->text('subtotal_final')->nullable();

            $table->text('comments_90')->nullable();

            $table->text('experimental')->nullable();
            $table->text('experimental_date')->nullable();

            $table->text('full_time_worker')->nullable();
            $table->text('full_time_worker_date')->nullable();
            $table->text('full_time_worker_position')->nullable();


            $table->text('modify')->nullable();
            $table->text('modify_position1')->nullable();
            $table->text('modify_position2')->nullable();
            $table->text('modify_date')->nullable();

            $table->text('other_90')->nullable();
            $table->text('other_com_90')->nullable();
            $table->text('name_rate_90')->nullable();


            $table->text('chioce_suitability1')->nullable();
            $table->text('chioce_suitability2')->nullable();
            $table->text('chioce_suitability3')->nullable();
            $table->text('chioce_suitability4')->nullable();
            $table->text('chioce_suitability5')->nullable();
            $table->text('chioce_suitability6')->nullable();
            $table->text('chioce_suitability7')->nullable();
            $table->text('chioce_suitability8')->nullable();
            $table->text('chioce_suitability9')->nullable();
            $table->text('chioce_suitability10')->nullable();

            $table->text('chioce_suitability11')->nullable();
            $table->text('chioce_suitability12')->nullable();
            $table->text('chioce_suitability13')->nullable();
            $table->text('chioce_suitability14')->nullable();
            $table->text('chioce_suitability15')->nullable();
            $table->text('chioce_suitability16')->nullable();
            $table->text('chioce_suitability17')->nullable();
            $table->text('chioce_suitability18')->nullable();
            $table->text('chioce_suitability19')->nullable();
            $table->text('chioce_suitability20')->nullable();


            $table->text('chioce_suitability21')->nullable();
            $table->text('chioce_suitability22')->nullable();
            $table->text('chioce_suitability23')->nullable();
            $table->text('chioce_suitability24')->nullable();
            $table->text('chioce_suitability25')->nullable();
            $table->text('chioce_suitability26')->nullable();
            $table->text('chioce_suitability27')->nullable();
            $table->text('chioce_suitability28')->nullable();
            $table->text('chioce_suitability29')->nullable();
            $table->text('chioce_suitability30')->nullable();


            $table->text('sum_chioce_suitability10')->nullable();

            $table->text('comment_suitability10')->nullable();
            $table->text('ok_suitability')->nullable();
            $table->text('other_suitability')->nullable();
            $table->text('other_com_suitability')->nullable();

            $table->text('namerate_suitability')->nullable();

            $table->text('conclusions')->nullable();
            $table->text('results_manager')->nullable();

            $table->text('human_resource_ok')->nullable();

            $table->text('human_resource_modi')->nullable();
            $table->text('human_resource_nodi')->nullable();

            $table->text('human_resource_commo')->nullable();
            $table->text('human_resource_comno')->nullable();

            $table->text('human_resource_adjust')->nullable();
            $table->text('human_resource_posi')->nullable();

            $table->text('human_resource_fail')->nullable();
            $table->text('human_resource_date')->nullable();

            $table->text('human_resource_other')->nullable();
            $table->text('human_resource_othercom')->nullable();
            $table->text('human_resource_nre')->nullable();


            $table->text('manager_resource_ok')->nullable();

            $table->text('manager_resource_modi')->nullable();
            $table->text('manager_resource_nodi')->nullable();

            $table->text('manager_resource_comdi')->nullable();
            $table->text('manager_resource_comno')->nullable();

            $table->text('manager_resource_adjust')->nullable();
            $table->text('manager_resource_posi')->nullable();

            $table->text('manager_resource_fail')->nullable();
            $table->text('manager_resource_date')->nullable();

            $table->text('manager_resource_other')->nullable();
            $table->text('manager_resource_othercom')->nullable();
            $table->text('manager_resource_nre')->nullable();
            
            $table->text('startwork_60')->nullable();
            $table->text('endwork_60')->nullable();
            $table->text('sick_leave_60')->nullable();
            $table->text('errand_leave_60')->nullable();
            $table->text('absence_60')->nullable();
            $table->text('vacation_60')->nullable();
            $table->text('line_terms_60')->nullable();
            $table->text('line_min_60')->nullable();

            $table->text('startwork_90')->nullable();
            $table->text('endtwork_90')->nullable();
            $table->text('sick_leave_90')->nullable();
            $table->text('errand_leave_90')->nullable();

            $table->text('dateC')->nullable();
            $table->text('date60T')->nullable();
            $table->text('date90T')->nullable();
            $table->text('dateL')->nullable();
            $table->text('dateS')->nullable();
            $table->text('dateM')->nullable();
           
            $table->longText('signa1_60')->nullable();
            $table->longText('signa1_90')->nullable();
            $table->longText('signa2')->nullable();
            $table->longText('signa3')->nullable();
            $table->longText('signa4')->nullable();

            $table->tinyInteger('signa1_60_enable')->default('0');
            $table->tinyInteger('signa1_90_enable')->default('0');
            $table->tinyInteger('signa2_enable')->default('0');
            $table->tinyInteger('signa3_enable')->default('0');
            $table->tinyInteger('signa4_enable')->default('0');
            $table->tinyInteger('degree_enable')->default('0');
            


            $table->text('absence_90')->nullable();
            $table->text('vacation_90')->nullable();
            $table->text('line_terms_90')->nullable();
            $table->text('line_min_90')->nullable();
            $table->tinyInteger('ngg_enable')->default('1');
            $table->text('NumberDate_60')->nullable();
            $table->text('NumberDate_90')->nullable();
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
        Schema::dropIfExists('ans_operate_all');
    }
}
