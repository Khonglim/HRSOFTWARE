<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ngg_employee;
use App\Operate_staff;
use Illuminate\Support\Facades\DB;
class Reset_staff_operController extends Controller
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
        if(Input::get('nem_id') !== '') {

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('nem_id'))
            ->update(['recheck_Oper' => 0]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('nem_id'))
            ->update(['recheck_conduct' => 0]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('nem_id'))
            ->update(['recheck_Oper_90' => 0]);

            DB::table('ngg_employee')
            ->where('nem_id', Input::get('nem_id'))
            ->update(['degree' => 0]);



            }
       $id =Input::get('nem_id');
       
      
       $operate =   DB::table('_ans_operate_staff')->where('id_posinal', '=',  $id)->delete();
       



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
