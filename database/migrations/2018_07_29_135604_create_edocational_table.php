<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdocationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edocational', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_languages');
            $table->char('primary');
            $table->char('year1');
            $table->char('year2');
            $table->char('gpa');
            $table->char('major');

            $table->char('secondary');
            $table->char('year3');
            $table->char('year4');
            $table->char('gpas');
            $table->char('majors');

            $table->char('vocation');
            $table->char('year5');
            $table->char('year6');
            $table->char('gpav');
            $table->char('majorv');

            $table->char('diploma');
            $table->char('year7');
            $table->char('year8');
            $table->char('gpad');
            $table->char('majord');

            $table->char('bachelor');
            $table->char('year9');
            $table->char('year10');
            $table->char('gpab');
            $table->char('majorb');

            $table->char('master');
            $table->char('year11');
            $table->char('year12');
            $table->char('gpam');
            $table->char('majorm');

            $table->char('otherE');
            $table->char('year13');
            $table->char('year14');
            $table->char('gpao');
            $table->char('majoro');




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
        Schema::dropIfExists('edocational');
    }
}
