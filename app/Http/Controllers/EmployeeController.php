<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Personal;
use App\Provinces;
use App\Nationality;


use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
class EmployeeController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $personal = Personal::where('enable','=', 1)->get();
        $data = array('personal' =>  $personal  );
        return view('employ/employee',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $provinces = Provinces::all();
        foreach ($provinces as $province){
            
            $items[$province->name] = $province->name;
        }

        $nationality = Nationality::all();
        foreach ($nationality as $nation){ 
            $items2[$nation->name] = $nation->name;
        }
        $data = array('items' => $items ,'items2' => $items2 );
        return view('employ/formcreatv',$data);

        
       
        
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
        $personal->salaryngg = $request->salaryngg;
        $personal->positionngg = $request->positionngg;
        $personal->name = $request->name;
        $personal->lastname = $request->lastname;
        $personal->nikname = $request->nikname;
        $personal->gender  = $request->gender;
        $personal->birthday = $request->birthday;
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $personal->photo = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }
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
        $personal->email_2 = $request->email_2;
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



        $personal->primary = $request->primary;
        $personal->year1 = $request->year1;
        $personal->year2 = $request->year2;
        $personal->gpa = $request->gpa;
        $personal->major = $request->major;

        $personal->secondary = $request->secondary;
        $personal->year3 = $request->year3;
        $personal->year4 = $request->year4;
        $personal->gpas = $request->gpas;
        $personal->majors = $request->majors;

        $personal->vocation = $request->vocation;
        $personal->year5 = $request->year5;
        $personal->year6 = $request->year6;
        $personal->gpav = $request->gpav;
        $personal->majorv = $request->majorv;

        $personal->diploma = $request->diploma;
        $personal->year7 = $request->year7;
        $personal->year8 = $request->year8;
        $personal->gpad = $request->gpad;
        $personal->majord = $request->majord;

        $personal->bachelor = $request->bachelor;
        $personal->year9 = $request->year9;
        $personal->year10 = $request->year10;
        $personal->gpab = $request->gpab;
        $personal->majorb = $request->majorb;

        $personal->master = $request->master;
        $personal->year11 = $request->year11;
        $personal->year12 = $request->year12;
        $personal->gpam = $request->gpam;
        $personal->majorm = $request->majorm;

        $personal->otherE = $request->otherE;
        $personal->year13 = $request->year13;
        $personal->year14 = $request->year14;
        $personal->gpao = $request->gpao;
        $personal->majoro = $request->majoro;
  

     
        $personal->thais  = $request->thais;
        $personal->thail  = $request->thail;
        $personal->thair  = $request->thair;

        $personal->engliss  = $request->engliss;
        $personal->englisl  = $request->englisl;
        $personal->englisr  = $request->englisr;

        $personal->otherr  = $request->otherr;
        $personal->othes  = $request->othes;
        $personal->othel  = $request->othel;
        $personal->other  = $request->other;
    

        
        $personal->list_of_employed1 = $request->list_of_employed1;
        $personal->job_description1 = $request->job_description1;
        $personal->call1 = $request->call1;
        $personal->start_job_duration1 = $request->start_job_duration1;
        $personal->end_job_duration2 = $request->end_job_duration2;
        $personal->reasonLeaving1 = $request->reasonLeaving1;
        $personal->lastsalary1= $request->lastsalary1;
        $personal->position1 = $request->position1;

        $personal->list_of_employed2 = $request->list_of_employed2;
        $personal->job_description2 = $request->job_description2;
        $personal->call2 = $request->call2;
        $personal->start_job_duration3 = $request->start_job_duration3;
        $personal->end_job_duration4 = $request->end_job_duration4;
        $personal->reasonLeaving2 = $request->reasonLeaving2;
        $personal->lastsalary2= $request->lastsalary2;
        $personal->position2 = $request->position2;

        $personal->list_of_employed3 = $request->list_of_employed3;
        $personal->job_description3 = $request->job_description3;
        $personal->call3 = $request->call3;
        $personal->start_job_duration5 = $request->start_job_duration5;
        $personal->end_job_duration6 = $request->end_job_duration6;
        $personal->reasonLeaving3 = $request->reasonLeaving3;
        $personal->lastsalary3= $request->lastsalary3;
        $personal->position3 = $request->position3;

        $personal->list_of_employed4 = $request->list_of_employed4;
        $personal->job_description4 = $request->job_description4;
        $personal->call4 = $request->call4;
        $personal->start_job_duration7 = $request->start_job_duration7;
        $personal->end_job_duration8 = $request->end_job_duration8;
        $personal->reasonLeaving4 = $request->reasonLeaving4;
        $personal->lastsalary4= $request->lastsalary4;
        $personal->position4 = $request->position4;

        $personal->list_of_employed5 = $request->list_of_employed5;
        $personal->job_description5 = $request->job_description5;
        $personal->call5 = $request->call5;
        $personal->start_job_duration9 = $request->start_job_duration9;
        $personal->end_job_duration10 = $request->end_job_duration10;
        $personal->reasonLeaving5 = $request->reasonLeaving5;
        $personal->lastsalary5= $request->lastsalary5;
        $personal->position5 = $request->position5;

        $personal->list_of_employed6 = $request->list_of_employed6;
        $personal->job_description6 = $request->job_description6;
        $personal->call6 = $request->call6;
        $personal->start_job_duration11 = $request->start_job_duration11;
        $personal->end_job_duration12 = $request->end_job_duration12;
        $personal->reasonLeaving6 = $request->reasonLeaving6;
        $personal->lastsalary6= $request->lastsalary6;
        $personal->position6 = $request->position6;
     

        $personal->namecm = $request->namecm;
        $personal->lastnamecm = $request->lastnamecm;
        $personal->firm = $request->firm;
        $personal->telecm = $request->telecm;
        $personal->positioncm = $request->positioncm;

        $personal->computer = $request->computer;
        $personal->fax = $request->fax;
        $personal->typewriter = $request->typewriter;
        $personal->dot = $request->dot;
        $personal->crash1 = $request->crash1;
        $personal->compd = $request->compd;
        $personal->compa = $request->compa;
        $personal->crash2 = $request->crash2;
        $personal->crash3 = $request->crash3;
        $personal->yes = $request->yes;
        $personal->owncar = $request->owncar;
        $personal->workk = $request->workk;
        $personal->dateworkk = $request->dateworkk;
        $personal->cardec = $request->cardec;
        $personal->license = $request->license;
        $personal->exitwork = $request->exitwork;

        $personal->serious_ill = $request->serious_ill;
        $personal->offense = $request->offense;
        $personal->pregnant = $request->pregnant;
        $personal->because = $request->because;

        $personal->spouse_tel = $request->spouse_tel;
        $personal->degree1 = $request->degree1;
        $personal->degree2 = $request->degree2;
        $personal->degree3 = $request->degree3;
        $personal->degree4 = $request->degree4;
        $personal->degree5 = $request->degree5;
        $personal->degree6 = $request->degree6;
        $personal->degree7 = $request->degree7;

        
        $personal->talent = $request->talent;
        $personal->knowfrom = $request->knowfrom;
        $personal->because2 = $request->because2;
        $personal->contact_name = $request->contact_name;
        $personal->contact_firm = $request->contact_firm;
        $personal->contact_tel = $request->contact_tel;
        $personal->contact_address = $request->contact_address;
        $personal->portfolio1 = $request->portfolio1;
        $personal->portfolio2 = $request->portfolio2;
        $personal->portfolio3 = $request->portfolio3;
        $personal->fronname = $request->fronname;
        
        $personal->save();
        return redirect('save_employ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        $data = array(
            'personal' =>  $personal
        );
        return view('employ/show',$data);

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
            $personal = Personal::find($id);
           
    
            $data = array(
                'personal' => $personal
            );
            return view('employ/formeditemployee',$data);
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

        $this->validate($request,[
            'name' => 'required|max:35',
            'lastname' => 'required',
            'nikname' => 'required|max:35',
            'gender' => 'required',

            
            'nationality' => 'required|max:35',
            'birthday' => 'required',
            'email_2' => ['required',Rule::unique('personal')->ignore($id), ],
            'address1' => 'required',
            'tel' => 'required|numeric',
            'race' => 'required',
            'religion' => 'required',
            'age' => 'required|numeric',

            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'moblie' => 'required|numeric',
            'address2' => 'required',
            'idcard' => 'required|numeric',
            'issued' => 'required',
            'province_crad' => 'required',
            
            'issueddate' => 'required',
            'living_status' => 'required',
            'issueddate' => 'required',
            'marital_status' => 'required',
            'expid' => 'required',
            'military_service' => 'required',


            'namefather' => 'required',
            'lastfather' => 'required',
            'occupation_father' => 'required',
            'alivef' => 'required',

            'namemother' => 'required',
            'lasrmother' => 'required',
            'occupationm' => 'required',
            'alivem' => 'required',

            'thais' => 'required',
            'thail' => 'required',
            'thair' => 'required',
            

            'engliss' => 'required',
            'englisl' => 'required',
            'englisr' => 'required',

            'namecm' => 'required',
            'lastnamecm' => 'required',
            'firm' => 'required',
            'telecm' => 'required',
            'positioncm' => 'required',

            'crash1' => 'required',
            'crash2' => 'required',
            'crash3' => 'required',
            'yes' => 'required',
            'owncar' => 'required',
            
            'exitwork' => 'required',
            'serious_ill' => 'required',
            'offense' => 'required',
            'pregnant' => 'required'
        ]);
        $personal =  Personal::find($id);
        $personal->salaryngg = $request->salaryngg;
        $personal->positionngg = $request->positionngg;
        $personal->talent = $request->talent;
        $personal->name = $request->name;
        $personal->lastname = $request->lastname;
        $personal->nikname = $request->nikname;
        $personal->gender  = $request->gender;
        $personal->birthday = $request->birthday;

        if(Input::hasFile('image')){
            $file=Input::file('image');
            $personal->photo = $file->getClientOriginalName();
            $file->move(public_path(). '/', $file->getClientOriginalName());
        }

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
        $personal->email_2 = $request->email_2;
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
        $personal->spouse_tel = $request->spouse_tel;
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



        $personal->primary = $request->primary;
        $personal->year1 = $request->year1;
        $personal->year2 = $request->year2;
        $personal->gpa = $request->gpa;
        $personal->major = $request->major;

        $personal->secondary = $request->secondary;
        $personal->year3 = $request->year3;
        $personal->year4 = $request->year4;
        $personal->gpas = $request->gpas;
        $personal->majors = $request->majors;

        $personal->vocation = $request->vocation;
        $personal->year5 = $request->year5;
        $personal->year6 = $request->year6;
        $personal->gpav = $request->gpav;
        $personal->majorv = $request->majorv;

        $personal->diploma = $request->diploma;
        $personal->year7 = $request->year7;
        $personal->year8 = $request->year8;
        $personal->gpad = $request->gpad;
        $personal->majord = $request->majord;

        $personal->bachelor = $request->bachelor;
        $personal->year9 = $request->year9;
        $personal->year10 = $request->year10;
        $personal->gpab = $request->gpab;
        $personal->majorb = $request->majorb;

        $personal->master = $request->master;
        $personal->year11 = $request->year11;
        $personal->year12 = $request->year12;
        $personal->gpam = $request->gpam;
        $personal->majorm = $request->majorm;

        $personal->otherE = $request->otherE;
        $personal->year13 = $request->year13;
        $personal->year14 = $request->year14;
        $personal->gpao = $request->gpao;
        $personal->majoro = $request->majoro;
  

     
        $personal->thais  = $request->thais;
        $personal->thail  = $request->thail;
        $personal->thair  = $request->thair;

        $personal->engliss  = $request->engliss;
        $personal->englisl  = $request->englisl;
        $personal->englisr  = $request->englisr;

        $personal->otherr  = $request->otherr;
        $personal->othes  = $request->othes;
        $personal->othel  = $request->othel;
        $personal->other  = $request->other;
    

        
        $personal->list_of_employed1 = $request->list_of_employed1;
        $personal->job_description1 = $request->job_description1;
        $personal->call1 = $request->call1;
        $personal->start_job_duration1 = $request->start_job_duration1;
        $personal->end_job_duration2 = $request->end_job_duration2;
        $personal->reasonLeaving1 = $request->reasonLeaving1;
        $personal->lastsalary1= $request->lastsalary1;
        $personal->position1 = $request->position1;

        $personal->list_of_employed2 = $request->list_of_employed2;
        $personal->job_description2 = $request->job_description2;
        $personal->call2 = $request->call2;
        $personal->start_job_duration3 = $request->start_job_duration3;
        $personal->end_job_duration4 = $request->end_job_duration4;
        $personal->reasonLeaving2 = $request->reasonleaving2;
        $personal->lastsalary2= $request->lastsalary2;
        $personal->position2 = $request->position2;

        $personal->list_of_employed3 = $request->list_of_employed3;
        $personal->job_description3 = $request->job_description3;
        $personal->call3 = $request->call3;
        $personal->start_job_duration5 = $request->start_job_duration5;
        $personal->end_job_duration6 = $request->end_job_duration6;
        $personal->reasonLeaving3 = $request->reasonleaving3;
        $personal->lastsalary3= $request->lastsalary3;
        $personal->position3 = $request->position3;
     


       
        $personal->namecm = $request->namecm;
        $personal->lastnamecm = $request->lastnamecm;
        $personal->firm = $request->firm;
        $personal->telecm = $request->telecm;
        $personal->positioncm = $request->positioncm;

        $personal->computer = $request->computer;
        $personal->fax = $request->fax;
        $personal->typewriter = $request->typewriter;
        $personal->dot = $request->dot;
        $personal->crash1 = $request->crash1;
        $personal->compd = $request->compd;
        $personal->compa = $request->compa;
        $personal->crash2 = $request->crash2;
        $personal->crash3 = $request->crash3;
        $personal->yes = $request->yes;
        $personal->owncar = $request->owncar;
        $personal->workk = $request->workk;
        $personal->dateworkk = $request->dateworkk;
        $personal->cardec = $request->cardec;
        $personal->license = $request->license;
        $personal->exitwork = $request->exitwork;

        $personal->serious_ill = $request->serious_ill;
        $personal->offense = $request->offense;
        $personal->pregnant = $request->pregnant;
        $personal->because = $request->because;


        $personal->degree1 = $request->degree1;
        $personal->degree2 = $request->degree2;
        $personal->degree3 = $request->degree3;
        $personal->degree4 = $request->degree4;
        $personal->degree5 = $request->degree5;
        $personal->degree6 = $request->degree6;
        $personal->degree7 = $request->degree7;
       
       

        $personal->portfolio1 = $request->portfolio1;
        $personal->portfolio2 = $request->portfolio2;
        $personal->portfolio3 = $request->portfolio3;
       



        $personal->fronname = $request->fronname;
        $personal->save();
       


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

        $personal = Personal::find($id);
        $personal->enable =0;
        $personal->save();
        return redirect('employee');
    }




}
