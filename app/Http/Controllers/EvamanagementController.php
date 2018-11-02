<?php

namespace App\Http\Controllers;

use App\Formfor;
use App\Ngg_employee;
use App\Employeetotest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class EvamanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $formfor = Formfor::all();
            $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
            $employeetotest = Employeetotest::where('nee_enable', '=', 1)->get();
            $data = array(
                'formfor' => $formfor,
                'employeetotest' => $employeetotest,
                'ngg_employee' => $ngg_employee
            );
        return view('testevamanage/manageindex',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $formfor = Formfor::all();
        $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
        $data = array(
                'formfor' => $formfor,
                'ngg_employee' => $ngg_employee
            );
        return view('testevamanage/managecreate',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Input::get('by_form') == 1) {

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee1');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee2');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee3');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee4');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee5');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee6');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee7');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee8');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee9');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee10');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();
        }else{

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee1');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee2');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee3');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee4');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

       $emtotest =  new Employeetotest;
       $emtotest->nee_is_employee = Input::get('is_employee5');
       $emtotest->nee_by_employee = Input::get('by_employee');
       $emtotest->nee_id_form = Input::get('by_form');
       $emtotest->nee_recheck = '1';
       $emtotest->nee_enable = '1';
       $emtotest->save();

        }
      

        Session::flash('flash_message','บันทึกสำเร็จ!!');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
          
          $employee= DB::table('employeetotest')->where('nee_id', '=', $id)
              ->where('nee_enable', '=', 1)
              ->get();
          $idd = $id;
          $formfor = Formfor::all();
          $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
            $data = array(
                'formfor' => $formfor,
                'ngg_employee' => $ngg_employee,
                'employee' => $employee,
                'idd'=>$idd
            );
            return view('testevamanage/manageedit',$data);
        }
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
        if($id !== '') {

            DB::table('employeetotest')
            ->where('nee_id', $id)
            ->update(['nee_id_form' => Input::get('formname')]);

            DB::table('employeetotest')
            ->where('nee_id', $id)
            ->update(['nee_is_employee' => Input::get('is_emp_new')]);

            DB::table('employeetotest')
            ->where('nee_id', $id)
            ->update(['nee_by_employee' => Input::get('by_emp_new')]);
            }
        Session::flash('flash_message','บันทึกการแก้ไขเรียบร้อย!!');
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if($id !== '') {
           DB::table('employeetotest')
            ->where('nee_id', $id)
            ->update(['nee_enable' => 0]);
            }
    }
}
