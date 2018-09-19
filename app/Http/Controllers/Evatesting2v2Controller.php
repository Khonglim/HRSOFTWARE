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
use App\Ngg_evaluate_resultv2;
use App\Ngg_evaresult_commentv2;
use Illuminate\Support\Facades\Input;

class Evatesting2v2Controller extends Controller
{
   public function index()
    {
        return view('testevav_2/checkversion');
    }

    public function test()
    {
        $employeetotest = Employeetotest::all();
        $formfor = Formfor::all();
        $ngg_employee = Ngg_employee::all();

         $data = array(
            'employeetotest' => $employeetotest ,'formfor' => $formfor,'ngg_employee' => $ngg_employee
        );
         return view("testevav_2/istestertotestv2",$data);
    }
     public function test2()
    {
         
         $partof = Partofv2::all();
         $formfor = Formfor::all();
         $question = Questionv2::all();
         $descrip = Description::all();
         $data = array(
            'partof' => $partof ,'formfor' => $formfor ,'question' => $question , 'descrip'=> $descrip
        ); 
        return view("testevav_2/starttestv2",$data);
    }
    public function test3($id)
    {
          if($id !== '') {

            
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = Ngg_evaluate_resultv2::all();
            $ngg_evaresult_comment = Ngg_evaresult_commentv2::all();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            
            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment

            );

            return view('testevav_2/evareportv2',$data);
        }
        
        
    }
    public function test4()
    {
         $employeetotests = Employeetotest::all();
        $ngg_employees = Ngg_employee::all();
        $ngg_evaluate_results = Ngg_evaluate_resultv2::all();
        
        
       $users = DB::table('employeetotest')
            ->leftJoin('ngg_employee', 'employeetotest.nee_by_employee', '=', 'ngg_employee.nem_id')
            ->get();
        $data = array(
            'users' => $users,
            'employeetotests' => $employeetotests,
            'ngg_evaluate_results' => $ngg_evaluate_results,
            'ngg_employees' => $ngg_employees,
            
        );  
         return view("summary/summevav2",$data );
        
        
    }
     public function test5($id)
    {
          if($id !== '') {

            
            $employeetotests = DB::table('employeetotest')->where('nee_by_employee', '=', $id)->get();
            $ngg_employee = Ngg_employee::all();
            $ngg_evaluate_results = Ngg_evaluate_resultv2::all();
            $ngg_evaresult_comment = Ngg_evaresult_commentv2::all();
            $question = DB::table('questionv2')->where('id_form', '=', 1)->get();
            $partof = DB::table('partofv2')->where('id_form', '=', 1)->get();
            
            $data = array(

                'employeetotests' => $employeetotests,
                'ngg_evaluate_results' => $ngg_evaluate_results,
                'ngg_employee' => $ngg_employee,
                'partof' => $partof,
                'question' => $question, 
                'idtest' => $id,
                'ngg_evaresult_comment'=>$ngg_evaresult_comment

            );

            return view('testevav_2/evareportblindnamev2',$data);
        }
        
        
    }
}
