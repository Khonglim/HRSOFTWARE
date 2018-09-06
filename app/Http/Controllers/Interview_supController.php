<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Comment_sup;
use App\Inter_sup;
class Interview_supController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interview = DB::table('_interview_sup')->get();
        $scoreinterviewp = DB::table('_scoreinterview')->get();
        $employee = DB::table('personal')->get();
        $n_position = DB::table('ngg_position')->get();
        foreach ($n_position as $n_positions){
            
            $items[$n_positions->nps_name] = $n_positions->nps_name;
        }
        $data = array(
            'interview' => $interview ,'scoreinterviewp' => $scoreinterviewp ,'items'=> $items, 'employee' => $employee 
        );   
        return view('rate/from_sup',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce1;
       $comment_sup->comment_interview  = $request->comment1;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce2;
       $comment_sup->comment_interview  = $request->comment2;
       $comment_sup->save();

        

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce3;
       $comment_sup->comment_interview  = $request->comment3;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce4;
       $comment_sup->comment_interview  = $request->comment4;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce5;
       $comment_sup->comment_interview  = $request->comment5;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce6;
       $comment_sup->comment_interview  = $request->comment6;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce8;
       $comment_sup->comment_interview  = $request->comment8;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce9;
       $comment_sup->comment_interview  = $request->comment9;
       $comment_sup->save();



       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce10;
       $comment_sup->comment_interview  = $request->comment10;
       $comment_sup->save();



       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce11;
       $comment_sup->comment_interview  = $request->comment11;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce12;
       $comment_sup->comment_interview  = $request->comment12;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce13;
       $comment_sup->comment_interview  = $request->comment13;
       $comment_sup->save();




       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce14;
       $comment_sup->comment_interview  = $request->comment14;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce15;
       $comment_sup->comment_interview  = $request->comment15;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce16;
       $comment_sup->comment_interview  = $request->comment16;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce17;
       $comment_sup->comment_interview  = $request->comment17;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce18;
       $comment_sup->comment_interview  = $request->comment18;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce19;
       $comment_sup->comment_interview  = $request->comment19;
       $comment_sup->save();



       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce20;
       $comment_sup->comment_interview  = $request->comment20;
       $comment_sup->save();


       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce100;
       $comment_sup->comment_interview  = $request->conclusion;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce101;
       $comment_sup->comment_interview  = $request->ngg_position;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce199;
       $comment_sup->comment_interview  = $request->ansinterview;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce200;
       $comment_sup->comment_interview  = $request->dateinterviwe_sup;
       $comment_sup->save();

       $comment_sup = new Comment_sup;
       $comment_sup->id_posinal = $request->employee;
       $comment_sup->chioce = $request->chioce320;
       $comment_sup->comment_interview  = $request->nametest;
       $comment_sup->save();


        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_1; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce1;
        $inter_sup->group= 1;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_2; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce2;
        $inter_sup->group= 2;
        $inter_sup->save();

       

       $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_3; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce3;
        $inter_sup->group= 2;
        $inter_sup->save();

       
        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_4; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce4;
        $inter_sup->group= 2;
        $inter_sup->save();

       
        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_5; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce5;
        $inter_sup->group= 2;
        $inter_sup->save();

       

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_6; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce6;
        $inter_sup->group= 3;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_7; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce7;
        $inter_sup->group= 3;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_8; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce8;
        $inter_sup->group= 3;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_9; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce9;
        $inter_sup->group= 3;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_10; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce10;
        $inter_sup->group= 3;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_11; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce11;
        $inter_sup->group= 4;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_12; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce12;
        $inter_sup->group = 4;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_13; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce13;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_14; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce14;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_15; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce15;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_16; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce16;
        $inter_sup->group  =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_17; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce17;
        $inter_sup->group  =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_18; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce18;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_19; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce19;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->score_20; 
        $inter_sup->id_personal = $request->employee;
        $inter_sup->chioce = $request->chioce20;
        $inter_sup->group =5;
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->rs5; 
        $inter_sup->chioce =  $request->chioce102; 
        $inter_sup->id_personal = $request->employee;
        
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->rs4; 
        $inter_sup->chioce =  $request->chioce103; 
        $inter_sup->id_personal = $request->employee;
       
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->rs3;
        $inter_sup->chioce =  $request->chioce104; 
        $inter_sup->id_personal = $request->employee;
     
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->rs2;
        $inter_sup->chioce =  $request->chioce105; 
        $inter_sup->id_personal = $request->employee;
      
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->rs1; 
        $inter_sup->chioce =  $request->chioce106; 
        $inter_sup->id_personal = $request->employee;
    
        $inter_sup->save();

        $inter_sup = new Inter_sup;
        $inter_sup->score =  $request->total; 
        $inter_sup->chioce =  $request->chioce107; 
        $inter_sup->id_personal = $request->employee;
     
        $inter_sup->save();

       


        return redirect('save');
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
