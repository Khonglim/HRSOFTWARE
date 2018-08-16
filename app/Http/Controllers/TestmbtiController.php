<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Testmbti;

class TestmbtiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmbti =  Testmbti::all();
        $data = array(
            'testmbti' => $testmbti
        );
        return view("testmbti/start",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testmbti = new Testmbti;
        $testmbti->name = $request->name;
        $testmbti->lastname = $request->lastname;
        $testmbti->id_personal = $request->ID;
        $testmbti->answer1 = $request->question1;
        $testmbti->answer2 = $request->question2;
        $testmbti->answer3 = $request->question3;
        $testmbti->answer4 = $request->question4;
        $testmbti->answer5 = $request->question5;
        $testmbti->answer6 = $request->question6;
        $testmbti->answer7 = $request->question7;
        $testmbti->answer8 = $request->question8;
        $testmbti->answer9 = $request->question9;
        $testmbti->answer10 = $request->question10;
        $testmbti->answer11 = $request->question11;
        $testmbti->answer12 = $request->question12;
        $testmbti->answer13 = $request->question13;
        $testmbti->answer14 = $request->question14;
        $testmbti->answer15 = $request->question15;
        $testmbti->answer16 = $request->question16;
        $testmbti->answer17 = $request->question17;
        $testmbti->answer18 = $request->question18;
        $testmbti->answer19 = $request->question19;
        $testmbti->answer20 = $request->question20;
        $testmbti->answer21 = $request->question21;
        $testmbti->answer22 = $request->question22;
        $testmbti->answer23 = $request->question23;
        $testmbti->answer24 = $request->question24;
        $testmbti->answer25 = $request->question25;
        $testmbti->answer26 = $request->question26;
        $testmbti->answer27 = $request->question27;
        $testmbti->answer28 = $request->question28;
        $testmbti->answer29 = $request->question29;
        $testmbti->answer30 = $request->question30;
        $testmbti->answer31 = $request->question31;
        $testmbti->answer32 = $request->question32;
        $testmbti->save();
        return redirect('mbti'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testmbti = Testmbti::find($id);
        $data = array(
            'testmbti' =>  $testmbti
        );
        return view('testmbti/showtest',$data);
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
