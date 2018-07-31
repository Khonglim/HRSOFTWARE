<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id_persons');
            $table->char('namecm');
            $table->char('lastnamecm');
            $table->char('firm');
            $table->char('telecm');

            $table->char('positioncm');
            $table->char('computer');
            $table->char('fax');
            $table->char('typewriter');
            $table->char('dot');

            $table->char('crash1');
            $table->char('nocrash1');


            $table->char('compd');
            $table->char('compa');

            $table->char('crash2');
            $table->char('nocrash2');

            $table->char('crash3');
            $table->char('nocrash3');

            $table->char('yes');
            $table->char('no');


            $table->char('owncar');
            $table->char('owncarno');

            $table->char('dateworkk');
            $table->char('cardec');
            $table->char('license');

            $table->char('exitwork');
            $table->char('because');
            $table->char('noexitwork');

            $table->char('serious_ill');
            $table->char('no_serious_ill');

            $table->char('offense');
            $table->char('no_offense');

            $table->char('pregnant');
            $table->char('no_pregnant');



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
        Schema::dropIfExists('persons');
    }
}
