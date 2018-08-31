<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment_interview;
use App\Con_interview;
use DB;
class InterviewController extends Controller
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
        $interview = DB::table('_interview')->get();
        $scoreinterviewp = DB::table('_scoreinterview')->get();
        $employee = DB::table('personal')->get();
        $n_position = DB::table('ngg_position')->get();
        foreach ($n_position as $n_positions){
            
            $items[$n_positions->nps_name] = $n_positions->nps_name;
        }
        $data = array(
            'interview' => $interview ,'scoreinterviewp' => $scoreinterviewp ,'items'=> $items, 'employee' => $employee 
        );   
        return view('rate/forminterview',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce1;
        $comment_interview->comment_interview  = $request->comment1;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce2;
        $comment_interview->comment_interview  = $request->comment2;
        $comment_interview->save();

        

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce3;
        $comment_interview->comment_interview  = $request->comment3;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce4;
        $comment_interview->comment_interview  = $request->comment4;
        $comment_interview->save();


        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce5;
        $comment_interview->comment_interview  = $request->comment5;
        $comment_interview->save();


        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce6;
        $comment_interview->comment_interview  = $request->comment6;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce7;
        $comment_interview->comment_interview  = $request->comment7;
        $comment_interview->save();


        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce8;
        $comment_interview->comment_interview  = $request->comment8;
        $comment_interview->save();



        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce9;
        $comment_interview->comment_interview  = $request->comment9;
        $comment_interview->save();



        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce10;
        $comment_interview->comment_interview  = $request->comment10;
        $comment_interview->save();


        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce11;
        $comment_interview->comment_interview  = $request->comment11;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce12;
        $comment_interview->comment_interview  = $request->comment12;
        $comment_interview->save();




        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce13;
        $comment_interview->comment_interview  = $request->comment13;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce14;
        $comment_interview->comment_interview  = $request->comment14;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce15;
        $comment_interview->comment_interview  = $request->comment15;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce16;
        $comment_interview->comment_interview  = $request->comment16;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce17;
        $comment_interview->comment_interview  = $request->comment17;
        $comment_interview->save();


        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce18;
        $comment_interview->comment_interview  = $request->comment18;
        $comment_interview->save();



        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce19;
        $comment_interview->comment_interview  = $request->comment19;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce20;
        $comment_interview->comment_interview  = $request->comment20;
        $comment_interview->save();

       
        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce103;
        $comment_interview->comment_interview  = $request->conclusion;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce101;
        $comment_interview->comment_interview  = $request->ngg_position;
        $comment_interview->save();



        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce123;
        $comment_interview->comment_interview  = $request->dateinterviwe;
        $comment_interview->save();

        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce169;
        $comment_interview->comment_interview  = $request->ans_sup;
        $comment_interview->save();




        $comment_interview = new Comment_interview;
        $comment_interview->id_posinal = $request->employee;
        $comment_interview->chioce = $request->chioce320;
        $comment_interview->comment_interview  = $request->nametest;
        $comment_interview->save();








        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_1; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce1;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_2; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce2;
        $con_interview->save();

       

       $con_interview = new Con_interview;
        $con_interview->score =  $request->score_3; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce3;
        $con_interview->save();

       
        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_4; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce4;
        $con_interview->save();

       
        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_5; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce5;
        $con_interview->save();

       

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_6; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce6;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_7; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce7;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_8; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce8;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_9; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce9;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_10; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce10;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_11; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce11;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_12; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce12;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_13; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce13;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_14; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce14;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_15; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce15;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_16; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce16;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_17; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce17;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_18; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce18;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_19; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce19;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->score_20; 
        $con_interview->id_personal = $request->employee;
        $con_interview->chioce = $request->chioce20;
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->rs5; 
        $con_interview->chioce = $request->chioce105;
        $con_interview->id_personal = $request->employee;
        
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->rs3; 
        $con_interview->chioce = $request->chioce106;
        $con_interview->id_personal = $request->employee;
       
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->rs4; 
        $con_interview->chioce = $request->chioce107;
        $con_interview->id_personal = $request->employee;
       
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->rs2;
        $con_interview->chioce = $request->chioce108;
        $con_interview->id_personal = $request->employee;
      
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->rs1; 
        $con_interview->chioce = $request->chioce109;
        $con_interview->id_personal = $request->employee;
    
        $con_interview->save();

        $con_interview = new Con_interview;
        $con_interview->score =  $request->total; 
        $con_interview->chioce = $request->chioce102;
        $con_interview->id_personal = $request->employee;
     
        $con_interview->save();

       


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
