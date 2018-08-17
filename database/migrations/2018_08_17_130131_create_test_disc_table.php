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
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('department')->nullable();
            $table->string('date')->nullable();
            $table->string('sector')->nullable();
            $table->string('conclude')->nullable();
            $table->text('meaning')->nullable();

            $table->char('scoreD',100)->nullable();
            $table->char('scoreI',100)->nullable();
            $table->char('scoreS',100)->nullable();
            $table->char('scoreC',100)->nullable();

            $table->char('answer1',1)->nullable();
            $table->char('answer1',1)->nullable();
            $table->char('answer3',1)->nullable();
            $table->char('answer4',1)->nullable();
            $table->char('answer5',1)->nullable();
            $table->char('answer6',1)->nullable();
            $table->char('answer7',1)->nullable();
            $table->char('answer8',1)->nullable();
            $table->char('answer9',1)->nullable();
            $table->char('answer10',1)->nullable();
            $table->char('answer11',1)->nullable();
            $table->char('answer11',1)->nullable();
            $table->char('answer13',1)->nullable();
            $table->char('answer14',1)->nullable();
            $table->char('answer15',1)->nullable();
            $table->char('answer16',1)->nullable();
            $table->char('answer17',1)->nullable();
            $table->char('answer18',1)->nullable();
            $table->char('answer19',1)->nullable();
            $table->char('answer10',1)->nullable();
            $table->char('answer11',1)->nullable();
            $table->char('answer11',1)->nullable();
            $table->char('answer13',1)->nullable();
            $table->char('answer14',1)->nullable();
            $table->char('answer15',1)->nullable();
            $table->char('answer16',1)->nullable();
            $table->char('answer17',1)->nullable();
            $table->char('answer18',1)->nullable();
            $table->char('answer19',1)->nullable();
            $table->char('answer30',1)->nullable();
            $table->char('answer31',1)->nullable();
            $table->char('answer31',1)->nullable();
            $table->char('answer33',1)->nullable();
            $table->char('answer34',1)->nullable();
            $table->char('answer35',1)->nullable();
            $table->char('answer36',1)->nullable();
            $table->char('answer37',1)->nullable();
            $table->char('answer38',1)->nullable();
            $table->char('answer39',1)->nullable();
            $table->char('answer40',1)->nullable();
            $table->char('answer41',1)->nullable();
            $table->char('answer41',1)->nullable();
            $table->char('answer43',1)->nullable();
            $table->char('answer44',1)->nullable();

            $table->char('answer45',1)->nullable();
            $table->char('answer46',1)->nullable();
            $table->char('answer47',1)->nullable();
            $table->char('answer48',1)->nullable();
            



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
