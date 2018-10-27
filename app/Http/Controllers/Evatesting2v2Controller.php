<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Formfor;
use App\Partofv2;
use App\Questionv2;
use App\Description;
use App\Ngg_employee;
use App\Employeetotest;
use App\Timeattendant;
use App\Ngg_evaluate_resultv2;
use App\Ngg_evaresult_commentv2;
use Illuminate\Support\Facades\Input;

class Evatesting2v2Controller extends Controller
{
   public function index()
    {
        return view('testevav_2/checkversion');
    }

    public function test($id)
    {
        $emm_id = $id;
        $employeetotest = Employeetotest::all();
        $formfor = Formfor::all();
        $ngg_employee = Ngg_employee::all();

         $data = array(
            'employeetotest' => $employeetotest ,
            'formfor' => $formfor,
            'ngg_employee' => $ngg_employee,
            'emm_id' => $emm_id
        );
         return view("testevav_2/istestertotestv2",$data);
    }
     public function test2(Request $request, $id)
    {
        
        
        $employeetotests = Employeetotest::all();
        $ngg_employee = Ngg_employee::all();
        $ids = $id;  
         $partof = Partofv2::all();
         $formfor = Formfor::all();
         $question = Questionv2::all();
         $descrip = Description::all();
         $data = array(
            'partof' => $partof ,
            'formfor' => $formfor ,
            'ngg_employee' => $ngg_employee,
            'question' => $question , 
            'descrip'=> $descrip,
            'ids' => $ids,
            'employeetotests' => $employeetotests
        ); 
        return view("testevav_2/starttestv2",$data);
    }
    public function test3leader($id)
    {
          if($id !== '') {

            $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '1')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '1')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            
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
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );

            return view('testevav_2/evareportv2_leader',$data);
        }
        
        
    }
    public function test3officer($id)
    {
          if($id !== '') {

            $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '2')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '2')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 2)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 2)->get();
            
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_id_form', '=', 2)
            ->where('nee_by_employee', '=', $id)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );


            return view('testevav_2/evareportv2_officer',$data);
        }
        
        
    }
    public function test3manager($id)
    {
          if($id !== '') {

            
           $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '3')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '3')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 3)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 3)->get();
            
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_by_employee', '=', $id)
            ->where('nee_id_form', '=', 3)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );

            return view('testevav_2/evareportv2_manager',$data);
        }
        
        
    }
    public function test4()
    {
        $employeetotests = Employeetotest::all();
        $ngg_employees = Ngg_employee::all();
        $formfor = Formfor::all();
        $ngg_evaluate_results = Ngg_evaluate_resultv2::all();
        $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
       $users = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_by_employee', '=', 'ngg_employee.nem_id')
            ->get();
        $data = array(
            'users' => $users,
            'formfor' => $formfor ,
            'employeetotests' => $employeetotests,
            'ngg_evaluate_results' => $ngg_evaluate_results,
            'ngg_employees' => $ngg_employees,
            

        );  
         return view("summary/summevav2",$data );
        
        
    }
     public function test5leader($id)
    {
          if($id !== '') {

              $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '1')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '1')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            
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
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );

            return view('testevav_2/evareportblindnamev2_leader',$data);
        }
        
        
    }
    public function test5officer($id)
    {
          if($id !== '') {

           
              $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '3')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '3')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 3)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 3)->get();
            
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_by_employee', '=', $id)
            ->where('nee_id_form', '=', 3)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );

            return view('testevav_2/evareportblindnamev2_officer',$data);
        }
        
        
    }
    public function test5manager($id)
    {
          if($id !== '') {

            
              $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = DB::table('ngg_evaluate_resultv2')->where('nes_q_form', '=', '2')->get();
            $ngg_evaresult_comment = DB::table('ngg_evaresult_commentv2')->where('nec_q_form', '=', '2')->get();
            $question = DB::table('questionv2')->where('id_form', '=', 2)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 2)->get();
            
             $point = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_is_employee', '=', 'ngg_employee.nem_id')
            ->leftJoin('ngg_evaluate_resultv2', 'employeetotest.nee_id', '=', 'ngg_evaluate_resultv2.nes_evaluate_employee_id')
            ->where('nee_by_employee', '=', $id)
            ->where('nee_id_form', '=', 2)
            ->where('nee_recheck', '=', 0)  
            ->get();

            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment,
                'timeattendant'=>$timeattendant,
                'point'=> $point
            );

            return view('testevav_2/evareportblindnamev2_manager',$data);
        }
        
        
    }
}
