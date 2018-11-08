<?php

namespace App\Http\Controllers;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Manpower;

class ManpowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $manpower = new Manpower;
        $manpower->company = $request->company;
        $manpower->position_required = $request->position_required;
        $manpower->section = $request->section;
        $manpower->number = $request->number;
        $manpower->date_required = $request->date_required;
        $manpower->age = $request->age;
        $manpower->permanent = $request->permanent;
        $manpower->apprentie = $request->apprentie;
        $manpower->subcontract = $request->subcontract;
        $manpower->daily = $request->daily;
        $manpower->monthly = $request->monthly;
        $manpower->start = $request->start;
        $manpower->checkstart = $request->checkstart;
        $manpower->timestart = $request->timestart;
        $manpower->timeend = $request->timeend;
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
        $manpower->other_education = $request->other_education;
        $manpower->foreign_lnguages = $request->foreign_lnguages;
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
        $manpower->signa1_60 = $request->signa1_60;
        $manpower->requested = $request->requested;


        Session::flash('flash_message','บันทึกเรียบร้อย!! รอการติดต่อกลับเจ้าหน้าที่');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
