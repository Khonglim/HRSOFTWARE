<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formfor;
use App\Ngg_employee;
use App\Employeetotest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

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
            $ngg_employee = Ngg_employee::all();
            $employeetotest = Employeetotest::all();
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
        $ngg_employee = Ngg_employee::all();
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

        return redirect('home');
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
          $employee= DB::table('employeetotest')->where('nee_id', '=', $id)->get();
          $idd = $id;
          $formfor = Formfor::all();
          $ngg_employee = Ngg_employee::all();
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
         if($id !== '') {
          
            }
    }
}
