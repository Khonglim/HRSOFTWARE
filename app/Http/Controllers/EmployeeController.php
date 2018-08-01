<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Personal;
use App\Educational;
use App\Languages;
use App\Persons;
use App\History;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employee = DB::table("personal")   
        ->leftJoin('edocational', 'personal.id_personal', '=', 'edocational.id_edocational')
        ->leftJoin('languages', 'edocational.id_edocational', '=', 'languages.id_languages')
        ->get();
        dd( $employee);

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('formcreateemployee' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = new Personal;
        $personal->prefix1 = $request->prefix1;
        $personal->name = $request->name;
        $personal->lastname = $request->lastname;
        $personal->nikname = $request->nikname;
        $personal->gender  = $request->gender;
        $personal->birthday = $request->birthday;
        $personal->nationality = $request->nationality;
        $personal->race = $request->race;
        $personal->religion = $request->religion;
        $personal->age = $request->age;
        $personal->height = $request->height;
        $personal->weight = $request->weight;
        $personal->brothers = $request->brothers;
        $personal->number = $request->number;
        $personal->tel = $request->tel;
        $personal->home = $request->home;
        $personal->moblie = $request->moblie;
        $personal->office = $request->office;
        $personal->email = $request->email;
        $personal->address1 = $request->address1;
        $personal->address2 = $request->address2;
        $personal->idcard = $request->idcard;
        $personal->issued = $request->issued;
        $personal->issueddate = $request->issueddate;
        $personal->expid = $request->expid;
        $personal->texid = $request->texid;
        $personal->living_status = $request->living_status;
        $personal->marital_status = $request->marital_status;
        $personal->if_marricd = $request->if_marricd;
        $personal->spouse = $request->spouse;
        $personal->name_spouse = $request->name_spouse;
        $personal->spouse_occupation = $request->spouse_occupation;
        $personal->firm_address = $request->firm_address;
        $personal->children = $request->children;
        $personal->boy = $request->boy;
        $personal->girls = $request->girls;
        $personal->school = $request->school;
        $personal->over21 = $request->over21;
        $personal->military_service = $request->military_service;
        $personal->namefather = $request->namefather;
        $personal->lastfather = $request->lastfather;
        $personal->occupation_father = $request->occupation_father;
        $personal->alivef = $request->alivef;
        $personal->namemother = $request->namemother;
        $personal->lasrmother = $request->lasrmother;
        $personal->occupationm = $request->occupationm;
        $personal->alivem = $request->alivem;
        $personal->province_crad = $request->province_crad;
        $personal->save();

        $educational= new Educational;
        $educational->primary = $request->primary;
        $educational->year1 = $request->year1;
        $educational->year2 = $request->year2;
        $educational->gpa = $request->gpa;
        $educational->major = $request->major;

        $educational->secondary = $request->secondary;
        $educational->year3 = $request->year3;
        $educational->year4 = $request->year4;
        $educational->gpas = $request->gpas;
        $educational->majors = $request->majors;

        $educational->vocation = $request->vocation;
        $educational->year5 = $request->year5;
        $educational->year6 = $request->year6;
        $educational->gpav = $request->gpav;
        $educational->majorv = $request->majorv;

        $educational->diploma = $request->diploma;
        $educational->year7 = $request->year7;
        $educational->year8 = $request->year8;
        $educational->gpad = $request->gpad;
        $educational->majord = $request->majord;

        $educational->bachelor = $request->bachelor;
        $educational->year9 = $request->year9;
        $educational->year10 = $request->year10;
        $educational->gpab = $request->gpab;
        $educational->majorb = $request->majorb;

        $educational->master = $request->master;
        $educational->year11 = $request->year11;
        $educational->year12 = $request->year12;
        $educational->gpam = $request->gpam;
        $educational->majorm = $request->majorm;

        $educational->otherE = $request->otherE;
        $educational->year13 = $request->year13;
        $educational->year14 = $request->year14;
        $educational->gpao = $request->gpao;
        $educational->majoro = $request->majoro;
        $educational->save();

        $languages = new Languages;
        $languages->thais  = $request->thais;
        $languages->thail  = $request->thail;
        $languages->thair  = $request->thair;

        $languages->engliss  = $request->engliss;
        $languages->englisl  = $request->englisl;
        $languages->englisr  = $request->englisr;

        $languages->otherr  = $request->otherr;
        $languages->othes  = $request->othes;
        $languages->othel  = $request->othel;
        $languages->other  = $request->other;
        $languages->save();

        $history = new History;
        $history->list_of_employed1 = $request->list_of_employed1;
        $history->job_description1 = $request->job_description1;
        $history->call1 = $request->call1;
        $history->start_job_duration1 = $request->start_job_duration1;
        $history->end_job_duration2 = $request->end_job_duration2;
        $history->reasonLeaving1 = $request->reasonLeaving1;
        $history->lastsalary1= $request->lastsalary1;
        $history->position1 = $request->position1;

        $history->list_of_employed2 = $request->list_of_employed2;
        $history->job_description2 = $request->job_description2;
        $history->call2 = $request->call2;
        $history->start_job_duration3 = $request->start_job_duration3;
        $history->end_job_duration4 = $request->end_job_duration4;
        $history->reasonLeaving2 = $request->reasonleaving2;
        $history->lastsalary2= $request->lastsalary2;
        $history->position2 = $request->position2;

        $history->list_of_employed3 = $request->list_of_employed3;
        $history->job_description3 = $request->job_description3;
        $history->call3 = $request->call3;
        $history->start_job_duration5 = $request->start_job_duration5;
        $history->end_job_duration6 = $request->end_job_duration6;
        $history->reasonLeaving3 = $request->reasonleaving3;
        $history->lastsalary3= $request->lastsalary3;
        $history->position3 = $request->position3;
        $history->save();


        $persons = new   Persons;
        $persons->namecm = $request->namecm;
        $persons->lastnamecm = $request->lastnamecm;
        $persons->firm = $request->firm;
        $persons->telecm = $request->telecm;
        $persons->positioncm = $request->positioncm;

        $persons->computer = $request->computer;
        $persons->fax = $request->fax;
        $persons->typewriter = $request->typewriter;
        $persons->dot = $request->dot;
        $persons->crash1 = $request->crash1;
        $persons->compd = $request->compd;
        $persons->compa = $request->compa;
        $persons->crash2 = $request->crash2;
        $persons->crash3 = $request->crash3;
        $persons->yes = $request->yes;
        $persons->owncar = $request->owncar;
        $persons->workk = $request->workk;
        $persons->dateworkk = $request->dateworkk;
        $persons->cardec = $request->cardec;
        $persons->license = $request->license;
        $persons->exitwork = $request->exitwork;

        $persons->serious_ill = $request->serious_ill;
        $persons->offense = $request->offense;
        $persons->pregnant = $request->pregnant;
        $persons->because = $request->because;
        $persons->save();
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if($id !== '') {
            $employee = Employee::find($id);
            $data = array(
                'employee' => $employee
            );
            return view('formemployee',$data);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $personal = Personal::find($id);
        $personal->prefix1 = $request->prefix1;
        $personal->name = $request->name;
        $personal->lastname = $request->lastname;
        $personal->nikname = $request->nikname;
        $personal->gender  = $request->gender;
        $personal->birthday = $request->birthday;
        $personal->nationality = $request->nationality;
        $personal->race = $request->race;
        $personal->religion = $request->religion;
        $personal->age = $request->age;
        $personal->height = $request->height;
        $personal->weight = $request->weight;
        $personal->brothers = $request->brothers;
        $personal->number = $request->number;
        $personal->tel = $request->tel;
        $personal->home = $request->home;
        $personal->moblie = $request->moblie;
        $personal->office = $request->office;
        $personal->email = $request->email;
        $personal->address1 = $request->address1;
        $personal->address2 = $request->address2;
        $personal->idcard = $request->idcard;
        $personal->issued = $request->issued;
        $personal->issueddate = $request->issueddate;
        $personal->expid = $request->expid;
        $personal->texid = $request->texid;
        $personal->living_status = $request->living_status;
        $personal->marital_status = $request->marital_status;
        $personal->if_marricd = $request->if_marricd;
        $personal->spouse = $request->spouse;
        $personal->name_spouse = $request->name_spouse;
        $personal->spouse_occupation = $request->spouse_occupation;
        $personal->firm_address = $request->firm_address;
        $personal->children = $request->children;
        $personal->boy = $request->boy;
        $personal->girls = $request->girls;
        $personal->school = $request->school;
        $personal->over21 = $request->over21;
        $personal->military_service = $request->military_service;
        $personal->namefather = $request->namefather;
        $personal->lastfather = $request->lastfather;
        $personal->occupation_father = $request->occupation_father;
        $personal->alivef = $request->alivef;
        $personal->namemother = $request->namemother;
        $personal->lastmother = $request->lasrmother;
        $personal->occupationm = $request->occupationm;
        $personal->alivem = $request->alivem;
        $personal->province_crad = $request->province_crad;
        $personal->save();

        $educational= Educational::find($id);
        $educational->primary = $request->primary;
        $educational->year1 = $request->year1;
        $educational->year2 = $request->year2;
        $educational->gpa = $request->gpa;
        $educational->major = $request->major;

        $educational->secondary = $request->secondary;
        $educational->year3 = $request->year3;
        $educational->year4 = $request->year4;
        $educational->gpas = $request->gpas;
        $educational->majors = $request->majors;

        $educational->vocation = $request->vocation;
        $educational->year5 = $request->year5;
        $educational->year6 = $request->year6;
        $educational->gpav = $request->gpav;
        $educational->majorv = $request->majorv;

        $educational->diploma = $request->diploma;
        $educational->year7 = $request->year7;
        $educational->year8 = $request->year8;
        $educational->gpad = $request->gpad;
        $educational->majord = $request->majord;

        $educational->bachelor = $request->bachelor;
        $educational->year9 = $request->year9;
        $educational->year10 = $request->year10;
        $educational->gpab = $request->gpab;
        $educational->majorb = $request->majorb;

        $educational->master = $request->master;
        $educational->year11 = $request->year11;
        $educational->year12 = $request->year12;
        $educational->gpam = $request->gpam;
        $educational->majorm = $request->majorm;

        $educational->otherE = $request->otherE;
        $educational->year13 = $request->year13;
        $educational->year14 = $request->year14;
        $educational->gpao = $request->gpao;
        $educational->majoro = $request->majoro;
        $educational->save();

        $languages = Languages::find($id);
        $languages->thais  = $request->thais;
        $languages->thail  = $request->thail;
        $languages->thair  = $request->thair;

        $languages->engliss  = $request->engliss;
        $languages->englisl  = $request->englisl;
        $languages->englisr  = $request->englisr;

        $languages->otherr  = $request->otherr;
        $languages->othes  = $request->othes;
        $languages->othel  = $request->othel;
        $languages->other  = $request->other;
        $languages->save();

        $history = History::find($id);
        $history->list_of_employed1 = $request->list_of_employed1;
        $history->job_description1 = $request->job_description1;
        $history->call1 = $request->call1;
        $history->start_job_duration1 = $request->start_job_duration1;
        $history->end_job_duration2 = $request->end_job_duration2;
        $history->reasonLeaving1 = $request->reasonLeaving1;
        $history->lastsalary1= $request->lastsalary1;
        $history->position1 = $request->position1;

        $history->list_of_employed2 = $request->list_of_employed2;
        $history->job_description2 = $request->job_description2;
        $history->call2 = $request->call2;
        $history->start_job_duration3 = $request->start_job_duration3;
        $history->end_job_duration4 = $request->end_job_duration4;
        $history->reasonLeaving2 = $request->reasonleaving2;
        $history->lastsalary2= $request->lastsalary2;
        $history->position2 = $request->position2;

        $history->list_of_employed3 = $request->list_of_employed3;
        $history->job_description3 = $request->job_description3;
        $history->call3 = $request->call3;
        $history->start_job_duration5 = $request->start_job_duration5;
        $history->end_job_duration6 = $request->end_job_duration6;
        $history->reasonLeaving3 = $request->reasonleaving3;
        $history->lastsalary3= $request->lastsalary3;
        $history->position3 = $request->position3;
        $history->save();


        $persons = Persons::find($id);
        $persons->namecm = $request->namecm;
        $persons->lastnamecm = $request->lastnamecm;
        $persons->firm = $request->firm;
        $persons->telecm = $request->telecm;
        $persons->positioncm = $request->positioncm;

        $persons->computer = $request->computer;
        $persons->fax = $request->fax;
        $persons->typewriter = $request->typewriter;
        $persons->dot = $request->dot;
        $persons->crash1 = $request->crash1;
        $persons->compd = $request->compd;
        $persons->compa = $request->compa;
        $persons->crash2 = $request->crash2;
        $persons->crash3 = $request->crash3;
        $persons->yes = $request->yes;
        $persons->owncar = $request->owncar;
        $persons->workk = $request->workk;
        $persons->dateworkk = $request->dateworkk;
        $persons->cardec = $request->cardec;
        $persons->license = $request->license;
        $persons->exitwork = $request->exitwork;

        $persons->serious_ill = $request->serious_ill;
        $persons->offense = $request->offense;
        $persons->pregnant = $request->pregnant;
        $persons->because = $request->because;
        $persons->save();


        return redirect('employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $employee = Employee::find($id);
        $employee->enable =0;
        $employee->save();
        return redirect('employee');
    }
}
