<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testdisc;
use Illuminate\Support\Facades\DB;
class TestdiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testdisc/disctest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testdisc = new Testdisc;
        $testdisc->name = $request->name;
        $testdisc->lastname = $request->lastname;
        $testdisc->conclude = $request->conclude;
        $testdisc->id_personal = $request->id_personal;
       
        $testdisc->meaning = $request->meaning;
        $testdisc->scoreD = $request->scoreD;
        $testdisc->scoreI =$request->scoreI;
        $testdisc->scoreS =$request->scoreS;
        $testdisc->scoreC = $request->scoreC;


        $testdisc->answer1 = $request->choice1;
        $testdisc->answer2 = $request->choice2;
        $testdisc->answer3 = $request->choice3;
        $testdisc->answer4 =$request->choice4;
        $testdisc->answer5 = $request->choice5;
        $testdisc->answer6 = $request->choice6;
        $testdisc->answer7 = $request->choice7;
        $testdisc->answer8 = $request->choice8;
        $testdisc->answer9 = $request->choice9;
        $testdisc->answer10 = $request->choice10;
        $testdisc->answer11 = $request->choice11;
        $testdisc->answer12 = $request->choice12;
        $testdisc->answer13 =  $request->choice13;
        $testdisc->answer14 = $request->choice14;
        $testdisc->answer15 = $request->choice15;
       $testdisc->answer16 = $request->choice16;
        $testdisc->answer17	 = $request->choice17;
        $testdisc->answer18 = $request->choice18;
        $testdisc->answer19 = $request->choice19;
        $testdisc->answer20 =$request->choice20;
        $testdisc->answer21 =$request->choice21;
        $testdisc->answer22 =$request->choice22;
        $testdisc->answer23 =$request->choice23;
        $testdisc->answer24 =$request->choice24;
        $testdisc->answer25 =$request->choice25;
        $testdisc->answer26 =$request->choice26;
        $testdisc->answer27 =$request->choice27;
        $testdisc->answer28 =$request->choice28;
        $testdisc->answer29 =$request->choice29;
        $testdisc->answer30 =$request->choice30;
        $testdisc->answer31 =$request->choice31;
        $testdisc->answer32 =$request->choice32;
        $testdisc->answer33 =$request->choice33;
        $testdisc->answer34 =$request->choice34;
        $testdisc->answer35 =$request->choice35;
        $testdisc->answer36 =$request->choice36;
        $testdisc->answer37 =$request->choice37;
        $testdisc->answer38 =$request->choice38;
        $testdisc->answer39 =$request->choice39;
        $testdisc->answer40 =$request->choice40;
        $testdisc->answer41 =$request->choice41;
        $testdisc->answer42 = $request->choice42;
        $testdisc->answer43 = $request->choice43;

        $testdisc->answer44 = $request->choice44;
        $testdisc->answer45 = $request->choice45;
        $testdisc->answer46 = $request->choice46;
        $testdisc->answer47 = $request->choice47;
        $testdisc->answer48 = $request->choice48;
        $testdisc->save();
        return redirect('disc'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $testdisc = Testdisc::find($id);
        $data = array(
            'testdisc' =>  $testdisc
        );
        return view('testdisc/showtest',$data);
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
