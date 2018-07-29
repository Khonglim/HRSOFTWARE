<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id_personal');
            $table->char("prefix");
            $table->char("name");
            $table->char("lastname");
            $table->char("nikname");
            $table->char("gender");
            
            $table->char("birthday");
            $table->char("nationality");
            $table->char("race");
            $table->char("age");
            $table->char("height");
            $table->char("weight");
            $table->char("brothers")->nullable();
            $table->char("number")->nullable();
            $table->char("tel");
            $table->char("home")->nullable();
            $table->char("office")->nullable();
            $table->char("email");
            $table->char("address1");
            $table->char("address2");
            $table->char("IDcard");
            $table->char("issued");
            $table->char("province_crad");
            $table->char("issueddate");
            $table->char("expid");
            $table->char("texid");
            $table->char("living_status")->nullable();
            $table->char("marital_status")->nullable();
            $table->char("if_marricd")->nullable();
            $table->char("spouse")->nullable();
            $table->char("name_spouse")->nullable();
            $table->char("spouse_occupation")->nullable();
            $table->char("firm_address")->nullable();
            $table->char("children")->nullable();
            $table->char("boy")->nullable();
            $table->char("girls")->nullable();
            $table->char("school")->nullable();
            $table->char("over21")->nullable();
            $table->char("military_service")->nullable();

            $table->char("namefather");
            $table->char("lastfather");
            $table->char("occupation_father");
            $table->char("alivef");

            $table->char("namemother");
            $table->char("lasrmother");
            $table->char("occupationm");
            $table->char("alivem");



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
        Schema::dropIfExists('personal');
    }
}
