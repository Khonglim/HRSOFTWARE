<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Partof;
use App\Formfor;
use App\Question;
use App\Resulteva;
use App\Resulteva2;
use App\Resulteva3;
use App\Ngg_employee;
use App\Employeetotest;
use App\Ngg_evaluate_result;
use Illuminate\Support\Facades\Input;

class EvatestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         return view("testeva/filltertodo");
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
       
        

        if ( Input::get('forms1_id')=='1') {

        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_11');
        $result->nes_q_point = Input::get('11');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_12');
        $result->nes_q_point = Input::get('12');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_13');
        $result->nes_q_point = Input::get('13');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_14');
        $result->nes_q_point = Input::get('14');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_15');
        $result->nes_q_point = Input::get('15');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_16');
        $result->nes_q_point = Input::get('16');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_17');
        $result->nes_q_point = Input::get('17');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_18');
        $result->nes_q_point = Input::get('18');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_19');
        $result->nes_q_point = Input::get('19');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_110');
        $result->nes_q_point = Input::get('110');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_21');
        $result->nes_q_point = Input::get('21');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_22');
        $result->nes_q_point = Input::get('22');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_23');
        $result->nes_q_point = Input::get('23');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_24');
        $result->nes_q_point = Input::get('24');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_25');
        $result->nes_q_point = Input::get('25');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_26');
        $result->nes_q_point = Input::get('26');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_27');
        $result->nes_q_point = Input::get('27');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_28');
        $result->nes_q_point = Input::get('28');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_31');
        $result->nes_q_point = Input::get('31');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_32');
        $result->nes_q_point = Input::get('32');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_33');
        $result->nes_q_point = Input::get('33');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_34');
        $result->nes_q_point = Input::get('34');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_35');
        $result->nes_q_point = Input::get('35');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_36');
        $result->nes_q_point = Input::get('36');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_41');
        $result->nes_q_point = Input::get('41');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_42');
        $result->nes_q_point = Input::get('42');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_43');
        $result->nes_q_point = Input::get('43');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_44');
        $result->nes_q_point = Input::get('44');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_45');
        $result->nes_q_point = Input::get('45');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_46');
        $result->nes_q_point = Input::get('46');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save(); $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_51');
        $result->nes_q_point = Input::get('51');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_52');
        $result->nes_q_point = Input::get('52');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_53');
        $result->nes_q_point = Input::get('53');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_54');
        $result->nes_q_point = Input::get('54');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new Ngg_evaluate_result;
        $result->nes_q_id = Input::get('t_55');
        $result->nes_q_point = Input::get('55');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        

       }
        elseif (Input::get('forms1_id')=='2') {
            echo "no data";

       }
       else{
 
       echo "no data";
       
       }
        
       

        return redirect("evatesting");
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
