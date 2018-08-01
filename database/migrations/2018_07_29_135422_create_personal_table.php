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
            $table->text("prefix1");
            $table->text("name");
            $table->text("lastname");
            $table->text("nikname");
            $table->text("gender");
            $table->text("religion");
            $table->text("birthday");
            $table->text("nationality");
            $table->text("race");
            $table->text("age");
            $table->text("height");
            $table->text("weight");
            $table->text("brothers")->nullable();
            $table->text("number")->nullable();
            $table->text("tel");
            $table->text("home")->nullable();
            $table->text("moblie")->nullable();
            $table->text("office")->nullable();
            $table->text("email");
            $table->text("address1");
            $table->text("address2");
            $table->text("IDcard");
            $table->text("issued");
            $table->text("province_crad");
            $table->text("issueddate");
            $table->text("expid");
            $table->text("texid");
            $table->text("living_status")->nullable();
            $table->text("marital_status")->nullable();
            $table->text("if_marricd")->nullable();
            $table->text("spouse")->nullable();
            $table->text("name_spouse")->nullable();
            $table->text("spouse_occupation")->nullable();
            $table->text("firm_address")->nullable();
            $table->text("children")->nullable();
            $table->text("boy")->nullable();
            $table->text("girls")->nullable();
            $table->text("school")->nullable();
            $table->text("over21")->nullable();
            $table->text("military_service")->nullable();

            $table->text("namefather");
            $table->text("lastfather");
            $table->text("occupation_father");
            $table->text("alivef");

            $table->text("namemother");
            $table->text("lasrmother");
            $table->text("occupationm");
            $table->text("alivem");



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
