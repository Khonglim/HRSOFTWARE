<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestMbtiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_mbti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('id_personal');
            $table->string('scoreI')->nullable();
            $table->string('scoreE')->nullable();
            $table->string('scoreS')->nullable();
            $table->string('scoreN')->nullable();
            $table->string('scoreT')->nullable();
            $table->string('scoreF')->nullable();
            $table->string('scoreJ')->nullable();
            $table->string('scoreP')->nullable();
            
            $table->string('answerIE')->nullable();
            $table->string('answerSN')->nullable();
            $table->string('answerTF')->nullable();
            $table->string('answerJP')->nullable();
            $table->string('conclude')->nullable();
            $table->text('meaning')->nullable();
            $table->text('meaningtwo')->nullable();
            
            $table->string('answer1')->nullable();
            $table->string('answer2')->nullable();
            $table->string('answer3')->nullable();
            $table->string('answer4')->nullable();
            $table->string('answer5')->nullable();
            $table->string('answer6')->nullable();
            $table->string('answer7')->nullable();
            $table->string('answer8')->nullable();
            $table->string('answer9')->nullable();
            $table->string('answer10')->nullable();
            $table->string('answer11')->nullable();
            $table->string('answer12')->nullable();
            $table->string('answer13')->nullable();
            $table->string('answer14')->nullable();
            $table->string('answer15')->nullable();
            $table->string('answer16')->nullable();
            $table->string('answer17')->nullable();
            $table->string('answer18')->nullable();
            $table->string('answer19')->nullable();
            $table->string('answer20')->nullable();
            $table->string('answer21')->nullable();
            $table->string('answer22')->nullable();
            $table->string('answer23')->nullable();
            $table->string('answer24')->nullable();
            $table->string('answer25')->nullable();
            $table->string('answer26')->nullable();
            $table->string('answer27')->nullable();
            $table->string('answer28')->nullable();
            $table->string('answer29')->nullable();
            $table->string('answer30')->nullable();
            $table->string('answer31')->nullable();
            $table->string('answer32')->nullable();
            $table->tinyInteger('mbti_enable')->default('1');
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
        Schema::dropIfExists('test_mbti');
    }
}
