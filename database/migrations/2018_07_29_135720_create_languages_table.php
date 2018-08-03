<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_persons');
            $table->char('otherr');
            $table->char('thais');
            $table->char('thail');
            $table->char('thair');

            
            $table->char('engliss');
            $table->char('englisl');
            $table->char('englisr');


            $table->char('othes');
            $table->char('othel');
            $table->char('other');



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
        Schema::dropIfExists('languages');
    }
}
