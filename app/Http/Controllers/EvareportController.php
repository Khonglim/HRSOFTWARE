<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Formfor;
use App\Partofv2;
use App\Questionv2;
use App\Ngg_department;
use App\Ngg_company;
use App\Ngg_position;
use App\Description;
use App\Ngg_employee;
use App\Employeetotest;
use App\Timeattendant;
use App\Ngg_evaluate_resultv2;
use App\Ngg_evaresult_commentv2;
use Illuminate\Support\Facades\Input;

class EvareportController extends Controller
{
     public function blind_report_leader($id)
    {
          if($id !== '') {

             $ngg_department = Ngg_department::where('ndp_enable', '=', 1)->get();
            $ngg_company = Ngg_company::where('ncp_enable', '=', 1)->get();
            $ngg_position = Ngg_position::where('nps_enable', '=', 1)->get();


            $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '1')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '1')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            $idtest = $id;
            
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_by_employee', '=', $id)
            ->where('nee_id_form', '=', 1)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $idtest,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point,
                'ngg_department' => $ngg_department,
                'ngg_company' => $ngg_company,
                'ngg_position' => $ngg_position
            );

            return view('evareport/blind_report_leader',$data);
        }
        
        
    }

    public function report_leader($id)
    {
          if($id !== '') {
            $ngg_department = Ngg_department::where('ndp_enable', '=', 1)->get();
            $ngg_company = Ngg_company::where('ncp_enable', '=', 1)->get();
            $ngg_position = Ngg_position::where('nps_enable', '=', 1)->get();
            

            $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '1')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '1')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            $idtest = $id;
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_by_employee', '=', $id)
            ->where('nee_id_form', '=', 1)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $idtest,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point,
                'ngg_department' => $ngg_department,
                'ngg_company' => $ngg_company,
                'ngg_position' => $ngg_position
            );

            return view('evareport/report_leader',$data);
        }
        
        
    }
}
