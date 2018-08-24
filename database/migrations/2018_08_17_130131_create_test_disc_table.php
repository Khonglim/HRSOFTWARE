<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDiscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_disc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_personal')->nullable(); 
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('department')->nullable();
            $table->string('date')->nullable();
            $table->string('sector')->nullable();
            $table->string('conclude')->nullable();
            $table->text('meaning')->nullable();

            $table->integer('scoreD')->nullable();
            $table->integer('scoreI')->nullable();
            $table->integer('scoreS')->nullable();
            $table->integer('scoreC')->nullable();

            $table->integer('answer1')->nullable();
            $table->integer('answer2')->nullable();
            $table->integer('answer3')->nullable();
            $table->integer('answer4')->nullable();
            $table->integer('answer5')->nullable();
            $table->integer('answer6')->nullable();
            $table->integer('answer7')->nullable();
            $table->integer('answer8')->nullable();
            $table->integer('answer9')->nullable();
            $table->integer('answer10')->nullable();
            $table->integer('answer11')->nullable();
            $table->integer('answer12')->nullable();
            $table->integer('answer13')->nullable();
            $table->integer('answer14')->nullable();
            $table->integer('answer15')->nullable();
            $table->integer('answer16')->nullable();
            $table->integer('answer17')->nullable();
            $table->integer('answer18')->nullable();
            $table->integer('answer19')->nullable();
            $table->integer('answer20')->nullable();
            $table->integer('answer21')->nullable();
            $table->integer('answer22')->nullable();
            $table->integer('answer23')->nullable();
            $table->integer('answer24')->nullable();
            $table->integer('answer25')->nullable();
            $table->integer('answer26')->nullable();
            $table->integer('answer27')->nullable();
            $table->integer('answer28')->nullable();
            $table->integer('answer29')->nullable();
            $table->integer('answer30')->nullable();
            $table->integer('answer31')->nullable();
            $table->integer('answer32')->nullable();
            $table->integer('answer33')->nullable();
            $table->integer('answer34')->nullable();
            $table->integer('answer35')->nullable();
            $table->integer('answer36')->nullable();
            $table->integer('answer37')->nullable();
            $table->integer('answer38')->nullable();
            $table->integer('answer39')->nullable();
            $table->integer('answer40')->nullable();
            $table->integer('answer41')->nullable();
            $table->integer('answer42')->nullable();
            $table->integer('answer43')->nullable();
            $table->integer('answer44')->nullable();

            $table->integer('answer45')->nullable();
            $table->integer('answer46')->nullable();
            $table->integer('answer47')->nullable();
            $table->integer('answer48')->nullable();
            $table->tinyInteger('disc_enable')->default('1');



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
        Schema::dropIfExists('test_disc');
    }
}
