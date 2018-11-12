<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use DB;
use App\Operate;
class OperateController extends Controller
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
        $employee  = DB::table('ngg_employee')
        ->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
        ->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
        ->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
        ->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
        ->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
        ->get();
        $data = array('employee' => $employee);
        return view("operate/new_indexAll",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee  = DB::table('ngg_employee')
        ->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
        ->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
        ->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
        ->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
        ->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
        ->get();
        $operater = new Operate;
        


        $data = array('employee' => $employee);
        Session::flash('flash_message','บันทึกเรียบร้อย!! และส่งอีเมลล์เรียบร้อย');
        return view("operate/new_indexAll",$data);
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
