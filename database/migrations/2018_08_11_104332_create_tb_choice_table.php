<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_choice', function (Blueprint $table) {
            $table->increments('id');
            $table->char('question',100);
            $table->char('choice1',100);   
            $table->char('choice2',100);
            $table->integer('answer1');  
            $table->integer('answer2');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_choice');
    }
}
