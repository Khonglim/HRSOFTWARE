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
<<<<<<< HEAD
            $table->integer('id_edocational');
=======
>>>>>>> 03c724fb4622b33f64bc3d0b41ee09cf6674968c
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


            $table->text('primary');
            $table->text('year1');
            $table->text('year2');
            $table->text('gpa');
            $table->text('major');

            $table->text('secondary');
            $table->text('year3');
            $table->text('year4');
            $table->text('gpas');
            $table->text('majors');

            $table->text('vocation');
            $table->text('year5');
            $table->text('year6');
            $table->text('gpav');
            $table->text('majorv');

            $table->text('diploma');
            $table->text('year7');
            $table->text('year8');
            $table->text('gpad');
            $table->text('majord');

            $table->text('bachelor');
            $table->text('year9');
            $table->text('year10');
            $table->text('gpab');
            $table->text('majorb');

            $table->text('master');
            $table->text('year11');
            $table->text('year12');
            $table->text('gpam');
            $table->text('majorm');

            $table->text('otherE');
            $table->text('year13');
            $table->text('year14');
            $table->text('gpao');
            $table->text('majoro');

            $table->text('otherr');
            $table->text('thais');
            $table->text('thail');
            $table->text('thair');

            
            $table->text('engliss');
            $table->text('englisl');
            $table->text('englisr');


            $table->text('othes');
            $table->text('othel');
            $table->text('other');



            $table->text('list_of_employed1');
            $table->text('job_description1');
            $table->text('call1');
            $table->text('start_job_duration1');
            $table->text('end_job_duration2');
            $table->text('position1');
            $table->text('reasonLeaving1');
            $table->text('lastsalary1');

            $table->text('list_of_employed2');
            $table->text('call2');
            $table->text('job_description2');
            $table->text('start_job_duration3');
            $table->text('end_job_duration4');
            $table->text('position2');
            $table->text('reasonLeaving2');
            $table->text('lastsalary2');

            $table->text('list_of_employed3');
            $table->text('call3');
            $table->text('job_description3');
            $table->text('start_job_duration5');
            $table->text('end_job_duration6');
            $table->text('position3');
            $table->text('reasonLeaving3');
            $table->text('lastsalary3');


            $table->text('namecm');
            $table->text('lastnamecm');
            $table->text('firm');
            $table->text('telecm');
            $table->text('workk');
          
            $table->text('positioncm');
            $table->text('computer');
            $table->text('fax');
            $table->text('typewriter');
            $table->text('dot');

            $table->text('crash1');
       


            $table->text('compd');
            $table->text('compa');

            $table->text('crash2');
         

            $table->text('crash3');
        

            $table->text('yes');
          

            $table->text('owncar');
          

            $table->text('dateworkk');
            $table->text('cardec');
            $table->text('license');

            $table->text('exitwork');
            $table->text('because');
           

            $table->text('serious_ill');
    

            $table->text('offense');
          

            $table->text('pregnant');

            $table->tinyInteger('enable')->default('1');
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
