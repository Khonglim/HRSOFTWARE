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
            $table->increments('id');
            $table->text("salaryngg")->nullable();
            $table->text("positionngg")->nullable();
            $table->text("name")->nullable();
            $table->text("lastname")->nullable();
            $table->text("nikname")->nullable();
            $table->text("gender")->nullable();
            $table->text("religion")->nullable();
            $table->text("birthday")->nullable();
            $table->text("photo")->nullable();
            $table->text("nationality")->nullable();
            $table->text("race")->nullable();
            $table->text("age")->nullable();
            $table->text("height")->nullable();
            $table->text("weight")->nullable();
            $table->text("brothers")->nullable();
            $table->text("number")->nullable();
            $table->text("tel")->nullable();
            $table->text("home")->nullable();
            $table->text("moblie")->nullable();
            $table->text("office")->nullable();
            $table->string("email")->unique();
            $table->string("email_2")->nullable();
            $table->text("address1")->nullable();
            $table->text("address2")->nullable();
            $table->text("idcard")->nullable();
            $table->text("issued")->nullable();
            $table->text("province_crad")->nullable();
            $table->text("issueddate")->nullable();
            $table->text("expid")->nullable();
            $table->text("texid")->nullable();
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

            $table->text("namefather")->nullable();
            $table->text("lastfather")->nullable();
            $table->text("occupation_father")->nullable();
            $table->text("alivef")->nullable();

            $table->text("namemother")->nullable();
            $table->text("lasrmother")->nullable();
            $table->text("occupationm")->nullable();
            $table->text("alivem")->nullable();


            $table->text('primary')->nullable();
            $table->text('year1')->nullable();
            $table->text('year2')->nullable();
            $table->text('gpa')->nullable();
            $table->text('major')->nullable();

            $table->text('secondary')->nullable();
            $table->text('year3')->nullable();
            $table->text('year4')->nullable();
            $table->text('gpas')->nullable();
            $table->text('majors')->nullable();

            $table->text('vocation')->nullable();
            $table->text('year5')->nullable();
            $table->text('year6')->nullable();
            $table->text('gpav')->nullable();
            $table->text('majorv')->nullable();

            $table->text('diploma')->nullable();
            $table->text('year7')->nullable();
            $table->text('year8')->nullable();
            $table->text('gpad')->nullable();
            $table->text('majord')->nullable();

            $table->text('bachelor')->nullable();
            $table->text('year9')->nullable();
            $table->text('year10')->nullable();
            $table->text('gpab')->nullable();
            $table->text('majorb')->nullable();

            $table->text('master')->nullable();
            $table->text('year11')->nullable();
            $table->text('year12')->nullable();
            $table->text('gpam')->nullable();
            $table->text('majorm')->nullable();

            $table->text('otherE')->nullable();
            $table->text('year13')->nullable();
            $table->text('year14')->nullable();
            $table->text('gpao')->nullable();
            $table->text('majoro')->nullable();

            $table->text('otherr')->nullable();
            $table->text('thais')->nullable();
            $table->text('thail')->nullable();
            $table->text('thair')->nullable();


            $table->text('engliss')->nullable();
            $table->text('englisl')->nullable();
            $table->text('englisr')->nullable();


            $table->text('othes')->nullable();
            $table->text('othel')->nullable();
            $table->text('other')->nullable();


            $table->text('list_of_employed1')->nullable();
            $table->text('job_description1')->nullable();
            $table->text('call1')->nullable();
            $table->text('start_job_duration1')->nullable();
            $table->text('end_job_duration2')->nullable();
            $table->text('position1')->nullable();
            $table->text('reasonLeaving1')->nullable();
            $table->text('lastsalary1')->nullable();

            $table->text('list_of_employed2')->nullable();
            $table->text('call2')->nullable();
            $table->text('job_description2')->nullable();
            $table->text('start_job_duration3')->nullable();
            $table->text('end_job_duration4')->nullable();
            $table->text('position2')->nullable();
            $table->text('reasonLeaving2')->nullable();
            $table->text('lastsalary2')->nullable();

            $table->text('list_of_employed3')->nullable();
            $table->text('call3')->nullable();
            $table->text('job_description3')->nullable();
            $table->text('start_job_duration5')->nullable();
            $table->text('end_job_duration6')->nullable();
            $table->text('position3')->nullable();
            $table->text('reasonLeaving3')->nullable();
            $table->text('lastsalary3')->nullable();

            $table->text('list_of_employed4')->nullable();
            $table->text('call4')->nullable();
            $table->text('job_description4')->nullable();
            $table->text('start_job_duration7')->nullable();
            $table->text('end_job_duration8')->nullable();
            $table->text('position4')->nullable();
            $table->text('reasonLeaving4')->nullable();
            $table->text('lastsalary4')->nullable();

            $table->text('list_of_employed5')->nullable();
            $table->text('call5')->nullable();
            $table->text('job_description5')->nullable();
            $table->text('start_job_duration9')->nullable();
            $table->text('end_job_duration10')->nullable();
            $table->text('position5')->nullable();
            $table->text('reasonLeaving5')->nullable();
            $table->text('lastsalary5')->nullable();

            $table->text('list_of_employed6')->nullable();
            $table->text('call6')->nullable();
            $table->text('job_description6')->nullable();
            $table->text('start_job_duration11')->nullable();
            $table->text('end_job_duration12')->nullable();
            $table->text('position6')->nullable();
            $table->text('reasonLeaving6')->nullable();
            $table->text('lastsalary6')->nullable();


            $table->text('namecm')->nullable();
            $table->text('lastnamecm')->nullable();
            $table->text('firm')->nullable();
            $table->text('telecm')->nullable();
            $table->text('workk')->nullable();

            $table->text('positioncm')->nullable();
            $table->text('computer')->nullable();
            $table->text('fax')->nullable();
            $table->text('typewriter')->nullable();
            $table->text('dot')->nullable();

            $table->text('crash1')->nullable();



            $table->text('compd')->nullable();
            $table->text('compa')->nullable();

            $table->text('crash2')->nullable();


            $table->text('crash3')->nullable();


            $table->text('yes')->nullable();


            $table->text('owncar')->nullable();


            $table->text('dateworkk')->nullable();
            $table->text('cardec')->nullable();
            $table->text('license')->nullable();

            $table->text('exitwork')->nullable();
            $table->text('because')->nullable();


            $table->text('serious_ill')->nullable();


            $table->text('offense')->nullable();

            $table->text('pregnant')->nullable();


            $table->text('degree1')->nullable();
            $table->text('degree2')->nullable();
            $table->text('degree3')->nullable();
            $table->text('degree4')->nullable();
            $table->text('degree5')->nullable();
            $table->text('degree6')->nullable();
            $table->text('degree7')->nullable();
            $table->text('degree8')->nullable();
            $table->text('talent')->nullable();
            $table->text('portfolio1')->nullable();
            $table->text('portfolio2')->nullable();
            $table->text('portfolio3')->nullable();
            $table->text('spouse_tel')->nullable();

            $table->text('fronname')->nullable();
            $table->text('knowfrom')->nullable();
            $table->text('because2')->nullable();

            $table->text('contact_name')->nullable();
            $table->text('contact_firm')->nullable();
            $table->text('contact_tel')->nullable();
            $table->text('contact_address')->nullable();

            $table->tinyInteger('enable')->default('1');
            $table->tinyInteger('recheck_conduct')->default('0');
            $table->tinyInteger('recheck_Oper')->default('0');
            $table->tinyInteger('recheck_Oper_90')->default('0');
            $table->tinyInteger('degree')->default('0');


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
