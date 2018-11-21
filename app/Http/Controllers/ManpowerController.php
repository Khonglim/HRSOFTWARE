<?php

namespace App\Http\Controllers;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Mail\Alert;
use Illuminate\Support\Facades\Mail;
use App\Manpower;
use App\Email_HR;
class ManpowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $manpower = Manpower::all();
        $data = array('manpower' =>$manpower);
        return view('Manpower.index_manpower',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Manpower.manpowercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           // 'g-recaptcha-response' => 'required|captcha'
       ]);
        $manpower = new Manpower;
        $manpower->internal_Recruit = $request->internal_Recruit;
        $manpower->external_Recruit = $request->external_Recruit;
        $manpower->company = $request->company;
        $manpower->position_required = $request->position_required;
        $manpower->section = $request->section;
        $manpower->number = $request->number;
        $manpower->date_required = $request->date_required;
        $manpower->age = $request->age;
        $manpower->permanent = $request->permanent;
        $manpower->apprentie = $request->apprentie;
        $manpower->subcontract = $request->subcontract;


//เพิ่ม
        $manpower->daily1 = $request->daily1;
        $manpower->monthly2 = $request->monthly2;
        $manpower->daily3 = $request->daily3;
        $manpower->monthly4 = $request->monthly4;
        $manpower->daily5 = $request->daily5;
        $manpower->monthly6 = $request->monthly6;


        $manpower->checkstart1 = $request->checkstart1;
        $manpower->timestart1 = $request->timestart1;
        $manpower->timeend1 = $request->timeend1;
        $manpower->checkstart2 = $request->checkstart2;
        $manpower->timestart2 = $request->timestart2;
        $manpower->timeend2 = $request->timeend2;

        $manpower->bec = $request->bec;
       

//เพิ่ม


        $manpower->hire = $request->hire;
        $manpower->substitute = $request->substitute;
        $manpower->name_substitute = $request->name_substitute;
        $manpower->ratesalary = $request->ratesalary;
        $manpower->benefits = $request->benefits;
        $manpower->description = $request->description;
        $manpower->gender = $request->gender;
        $manpower->secondary = $request->secondary;
        $manpower->primary = $request->primary;
        $manpower->high_school = $request->high_school;
        $manpower->vocational = $request->vocational;
        $manpower->high_vocational = $request->high_vocational;
        $manpower->undergraduate = $request->undergraduate;
        $manpower->other_education = $request->othereducation;
        $manpower->foreign_languages = $request->foreign_languages;
        $manpower->languages_name = $request->languages_name;
        $manpower->typing = $request->typing;
        $manpower->typing_name = $request->typing_name;
        $manpower->computer_knowledge = $request->computer_knowledge;
        $manpower->other_skill = $request->other_skill;
        $manpower->inexperience = $request->inexperience;
        $manpower->inexperience_com = $request->inexperience_com;
        $manpower->minimum_experience = $request->minimum_experience;
        $manpower->minimum_experience_com = $request->minimum_experience_com;
        $manpower->additional_experience = $request->additional_experience;
        $manpower->additional_com = $request->additional_com;
        $manpower->other_experience = $request->other_experience;
        $manpower->other_experience_com = $request->other_experience_com;
        $manpower->signa1_requested = $request->signa1_requested;
        $manpower->requested = $request->requested;
        $manpower->knowledge_name = $request->knowledge_name;
        $manpower->other_skill_name = $request->other_skill_name;
        $manpower->save();
        $mail_hr = Email_HR::all();
       foreach($mail_hr as $emails   ){
           if( $emails->email_enable == 1){
            Mail::to( $emails->email_hr)->send(new Alert());
           }
       }
       
        Session::flash('flash_message','บันทึกเรียบร้อย!! และส่งอีเมลล์แจ้งฝ่ายบุคคลแล้วค่ะ');
        return view('Manpower.manpowercreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manpower =  Manpower::find($id);
        $data = array(
            'manpower' =>  $manpower
        );
        return view('Manpower/pdf',$data);
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
            $manpower = Manpower::find($id);
            $data = array(
                'manpower' =>  $manpower
            );
            return view('Manpower/send_manpower',$data);
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


        $manpower =  Manpower::find($id);
        if($request->signa1_md != ''){
            $manpower->signa1_md = $request->signa1_md;
            $manpower->MD_enable =1;
            $manpower->save();
            Session::flash('flash_message','บันทึกเรียบร้อย!! ');
            return redirect('savepower');
        }
        if($request->signa1_sup != ''){
            $manpower->signa1_sup = $request->signa1_sup;
            $manpower->Sup_enable =1;
            $manpower->save();
            Session::flash('flash_message','บันทึกเรียบร้อย!! ');
            return redirect('manpower');
        }
       
       


        
       
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manpower = Manpower::find($id);
        $manpower->delete();
        Session::flash('flash_message', 'ลบสำเร็จ!!');
        return redirect('manpower');
    }
}
