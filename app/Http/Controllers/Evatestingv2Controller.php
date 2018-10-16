<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Partof;
use App\Formfor;
use App\Question;
use App\Ngg_employee;
use App\Employeetotest;
use App\Ngg_evaluate_resultv2;
use App\Ngg_evaresult_commentv2;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

use App\Http\Controllers\Controller;

class Evatestingv2Controller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testevav_2/filltertodov2');
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

        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_11');
        $result->nes_q_point = Input::get('11');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_12');
        $result->nes_q_point = Input::get('12');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_13');
        $result->nes_q_point = Input::get('13');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_14');
        $result->nes_q_point = Input::get('14');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_15');
        $result->nes_q_point = Input::get('15');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_16');
        $result->nes_q_point = Input::get('16');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_17');
        $result->nes_q_point = Input::get('17');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_18');
        $result->nes_q_point = Input::get('18');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();

        $result= new ngg_evaresult_commentv2;
        $result->nec_q_form = Input::get('forms1_id');
        $result->nec_q_id = Input::get('c_19');
        if (Input::get('10')=='') {
            $result->nec_comment='-';
        }
        else{
            $result->nec_comment= Input::get('10');
        }
        $result->nec_evaluate_employee_id= Input::get('nee_id2');
        $result->save();

        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_21');
        $result->nes_q_point = Input::get('21');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_22');
        $result->nes_q_point = Input::get('22');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_23');
        $result->nes_q_point = Input::get('23');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_24');
        $result->nes_q_point = Input::get('24');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();

        $result= new ngg_evaresult_commentv2;
        $result->nec_q_form = Input::get('forms1_id');
        $result->nec_q_id = Input::get('c_25');
        if (Input::get('20')=='') {
            $result->nec_comment='-';
        }
        else{
            $result->nec_comment= Input::get('20');
        }
        $result->nec_evaluate_employee_id= Input::get('nee_id2');
        $result->save();

        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_31');
        $result->nes_q_point = Input::get('31');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_32');
        $result->nes_q_point = Input::get('32');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_33');
        $result->nes_q_point = Input::get('33');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_34');
        $result->nes_q_point = Input::get('34');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_35');
        $result->nes_q_point = Input::get('35');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_36');
        $result->nes_q_point = Input::get('36');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_37');
        $result->nes_q_point = Input::get('37');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();

        $result= new ngg_evaresult_commentv2;
        $result->nec_q_form = Input::get('forms1_id');
        $result->nec_q_id = Input::get('c_38');
         if (Input::get('30')=='') {
           $result->nec_comment='-';
        }
        else{
            $result->nec_comment= Input::get('30');
        }
        $result->nec_evaluate_employee_id= Input::get('nee_id2');
        $result->save();

        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_41');
        $result->nes_q_point = Input::get('41');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_42');
        $result->nes_q_point = Input::get('42');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_43');
        $result->nes_q_point = Input::get('43');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();

        $result= new ngg_evaresult_commentv2;
        $result->nec_q_form = Input::get('forms1_id');
        $result->nec_q_id = Input::get('c_44');
        if (Input::get('40')=='') {
            $result->nec_comment='-';
        }
        else{
            $result->nec_comment= Input::get('40');  
        }
        $result->nec_evaluate_employee_id= Input::get('nee_id2');
        $result->save();

        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_51');
        $result->nes_q_point = Input::get('51');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();
        $result =  new ngg_evaluate_resultv2;
        $result->nes_q_form = Input::get('forms1_id');
        $result->nes_q_id = Input::get('t_52');
        $result->nes_q_point = Input::get('52');
        $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
        $result->save();

        $result= new ngg_evaresult_commentv2;
        $result->nec_q_form = Input::get('forms1_id');
        $result->nec_q_id = Input::get('c_53');
        if (Input::get('50')=='') {
            $result->nec_comment='-';
        }
        else{
            $result->nec_comment= Input::get('50');
        }
        $result->nec_evaluate_employee_id= Input::get('nee_id2');
        $result->save();
        
        $check = Input::get('nee_id2');
        DB::table('employeetotest')
            ->where('nee_id', $check)
            ->update(['nee_recheck' => 0]);
        
       }
    elseif (Input::get('forms1_id')=='2') {
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_11');
                    $result->nes_q_point = Input::get('11');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_12');
                    $result->nes_q_point = Input::get('12');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_13');
                    $result->nes_q_point = Input::get('13');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_14');
                    $result->nes_q_point = Input::get('14');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_15');
                    $result->nes_q_point = Input::get('15');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_16');
                    $result->nes_q_point = Input::get('16');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_17');
                    $result->nes_q_point = Input::get('17');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_18');
                    $result->nes_q_point = Input::get('18');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_19');
                    if (Input::get('10')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('10');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_21');
                    $result->nes_q_point = Input::get('21');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_22');
                    $result->nes_q_point = Input::get('22');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_23');
                    $result->nes_q_point = Input::get('23');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_24');
                    $result->nes_q_point = Input::get('24');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_25');
                    $result->nes_q_point = Input::get('25');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_26');
                    if (Input::get('20')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('20');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_31');
                    $result->nes_q_point = Input::get('31');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_32');
                    $result->nes_q_point = Input::get('32');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_33');
                    $result->nes_q_point = Input::get('33');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_34');
                    $result->nes_q_point = Input::get('34');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_35');
                    $result->nes_q_point = Input::get('35');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_36');
                     if (Input::get('30')=='') {
                       $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('30');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_41');
                    $result->nes_q_point = Input::get('41');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_42');
                    $result->nes_q_point = Input::get('42');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_43');
                    $result->nes_q_point = Input::get('43');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_44');
                    $result->nes_q_point = Input::get('44');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_45');
                    $result->nes_q_point = Input::get('45');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_46');
                    if (Input::get('40')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('40');  
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();
                    
                    $check = Input::get('nee_id2');
                    DB::table('employeetotest')
                        ->where('nee_id', $check)
                        ->update(['nee_recheck' => 0]);

       }
    elseif(Input::get('forms1_id')=='3'){
 
                     $result =  new ngg_evaluate_resultv2;
                     $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_11');
                    $result->nes_q_point = Input::get('11');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_12');
                    $result->nes_q_point = Input::get('12');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_13');
                    $result->nes_q_point = Input::get('13');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_14');
                    $result->nes_q_point = Input::get('14');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_15');
                    $result->nes_q_point = Input::get('15');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_16');
                    $result->nes_q_point = Input::get('16');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_17');
                    $result->nes_q_point = Input::get('17');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_18');
                    $result->nes_q_point = Input::get('18');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_19');
                    if (Input::get('10')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('10');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_21');
                    $result->nes_q_point = Input::get('21');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_22');
                    $result->nes_q_point = Input::get('22');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_23');
                    $result->nes_q_point = Input::get('23');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_24');
                    $result->nes_q_point = Input::get('24');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_25');
                    if (Input::get('20')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('20');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_31');
                    $result->nes_q_point = Input::get('31');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_32');
                    $result->nes_q_point = Input::get('32');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_33');
                    $result->nes_q_point = Input::get('33');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_34');
                    $result->nes_q_point = Input::get('34');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();

                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_35');
                     if (Input::get('30')=='') {
                       $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('30');
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_41');
                    $result->nes_q_point = Input::get('41');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_42');
                    $result->nes_q_point = Input::get('42');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_43');
                    $result->nes_q_point = Input::get('43');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2');
                    $result->save();
                    
                    $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_44');
                    if (Input::get('40')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('40');  
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();
                    
                      $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_51');
                    $result->nes_q_point = Input::get('51');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                    $result =  new ngg_evaluate_resultv2;
                    $result->nes_q_form = Input::get('forms1_id');
                    $result->nes_q_id = Input::get('t_52');
                    $result->nes_q_point = Input::get('52');
                    $result->nes_evaluate_employee_id = Input::get('nee_id2'); 
                    $result->save();
                     $result= new ngg_evaresult_commentv2;
                    $result->nec_q_form = Input::get('forms1_id');
                    $result->nec_q_id = Input::get('c_53');
                    if (Input::get('50')=='') {
                        $result->nec_comment='-';
                    }
                    else{
                        $result->nec_comment= Input::get('50');  
                    }
                    $result->nec_evaluate_employee_id= Input::get('nee_id2');
                    $result->save();

                    $check = Input::get('nee_id2');
                    DB::table('employeetotest')
                        ->where('nee_id', $check)
                        ->update(['nee_recheck' => 0]);
       
       }
        
    Session::flash('flash_message','สำเร็จ!! ขอบคุณสําหรับการประเมิน');
    return redirect()->route("home");
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
