<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Operate_Chioce;
use App\Operate_qSup;
use App\Operate_sup;
use App\Personal;
use DB;
class Operate_supController extends Controller
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
        return view('operate/sup/operate_60');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = Personal::find(Input::get('id_posinal'));
        $personal->recheck_Oper =1;
        $personal->recheck_conduct=1;
        $personal->recheck_Oper_90=1;
        $personal->save();

        $operatesup = new Operate_sup;
        $operatesup->id_posinal= Input::get('id_posinal');  
        $operatesup->id_employ= Input::get('id_employ');  
        $operatesup->position= Input::get('position');  
        $operatesup->department= Input::get('department');  
        $operatesup->degree= Input::get('degree');  ;
        $operatesup->starttime= Input::get('dateStart2');  
        $operatesup->endtime= Input::get('dateEnd2');  
        $operatesup->number= Input::get('totolDay2'); 
        $operatesup->date_60= Input::get('totolDay_60');  
        $operatesup->date_90 = Input::get('totolDay_90'); 


        $operatesup->chioce1_60= Input::get('score90_1');  
        $operatesup->chioce2_60= Input::get('score90_2');  
        $operatesup->chioce3_60= Input::get('score90_3');  
        $operatesup->chioce4_60 = Input::get('score90_4'); 
        $operatesup->chioce5_60= Input::get('score90_5'); 
        $operatesup->chioce6_60 = Input::get('score90_6'); 
        $operatesup->chioce7_60 = Input::get('score90_7'); 
        $operatesup->chioce8_60= Input::get('score90_8');  
        $operatesup->chioce9_60= Input::get('score90_9');  
        $operatesup->chioce10_60 = Input::get('score90_10'); 
        $operatesup->chioce11_60 = Input::get('score90_11'); 
        $operatesup->chioce12_60 = Input::get('score90_12'); 
        $operatesup->chioce13_60 = Input::get('score90_13'); 
        $operatesup->chioce14_60 = Input::get('score90_14'); 
        $operatesup->chioce15_60 = Input::get('score90_15'); 
        $operatesup->chioce15_60 = Input::get('score90_16'); 
        $operatesup->chioce15_60 = Input::get('score90_17'); 
        $operatesup->chioce15_60 = Input::get('score90_18'); 
        $operatesup->chioce15_60 = Input::get('score90_19'); 
        $operatesup->chioce15_60 = Input::get('score90_20'); 
        $operatesup->chioce15_60 = Input::get('score90_21'); 
        $operatesup->chioce15_60 = Input::get('score90_22'); 
        $operatesup->chioce15_60 = Input::get('score90_23'); 
        $operatesup->chioce15_60 = Input::get('score90_24'); 
        $operatesup->chioce15_60 = Input::get('score90_25'); 




        $operatesup->subtotal_60= Input::get('total_60');  
        $operatesup->rate_60= Input::get('rate_60');  
    
        $operatesup->comments_60 = Input::get('assessor'); 

        $operatesup->comments_featured= Input::get('featured'); 
        $operatesup->comments_weakness= Input::get('weakness'); 
        $operatesup->name_rate_60=   Input::get('namerate'); 
        
     


        $operatesup->startwork_60= Input::get('startrate_60') ;
        $operatesup->endwork_60 = Input::get('endrate_60');
        $operatesup->sick_leave_60 = Input::get('sick');
        $operatesup->errand_leave_60 = Input::get('errand');
        $operatesup->absence_60 = Input::get('absence');
        $operatesup->vacation_60= Input::get('vacation');
        $operatesup->line_terms_60 = Input::get('line');
        $operatesup->line_min_60 = Input::get('min');
        $operatesup->save();
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
       return 'ok++++';
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
