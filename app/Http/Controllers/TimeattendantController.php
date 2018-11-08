<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngg_employee;
use App\Timeattendant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class TimeattendantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        $time_at = DB::table('ngg_empolyee_timeattendant')
            ->leftJoin('ngg_employee', 'ngg_empolyee_timeattendant.net_employee_id', '=', 'ngg_employee.nem_id')
            ->where('net_enable', '=', 1)
            ->get();

         $data = array(
                'time_at' => $time_at
        );
        return view('time_atten/timeatten_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $namelist = DB::table('ngg_empolyee_timeattendant')
            ->leftJoin('ngg_employee', 'ngg_empolyee_timeattendant.net_employee_id', '=', 'ngg_employee.nem_id')
            ->where('net_enable', '=', 1)
            ->get();

         $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
         $timeattendant = Timeattendant::where('net_enable', '=', 1)->get();
        $data = array(
            'timeattendant' => $timeattendant,
                'ngg_employee' => $ngg_employee,
                 'namelist' => $namelist
            );
       return view('time_atten/timeatten_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $timeattendant = New Timeattendant;
        $timeattendant->net_employee_id = Input::get('employee');
        $timeattendant->net_sick_leave = Input::get('sick_leave');
        $timeattendant->net_personal_leave = Input::get('personal_leave');
        $timeattendant->net_late = Input::get('lated');
        $timeattendant->net_miss_work = Input::get('miss_work');
        $timeattendant->net_annual_leave = Input::get('annual_leave');
        $timeattendant->save();
        
        Session::flash('flash_message','บันทึกสำเร็จ!!');
        return redirect("timeattendant");
        
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
        if($id !== '') {
          $timeattendant = DB::table('ngg_empolyee_timeattendant')->where('net_id', '=', $id)
              ->where('net_enable', '=', 1)
              ->get();
          $idd = $id;
          $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
            $data = array(
                'ngg_employee' => $ngg_employee,
                'timeattendant' => $timeattendant,
                'idd'=>$idd
            );
            return view('time_atten/timeatten_edit',$data);
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
            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_employee_id' => Input::get('employee')]);

            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_sick_leave' => Input::get('sick_leave')]);

            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_personal_leave' => Input::get('personal_leave')]);

            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_late' => Input::get('lated')]);

            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_miss_work' => Input::get('miss_work')]);

            DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_annual_leave' => Input::get('annual_leave')]);
            
            }
            Session::flash('flash_message','บันทึกการแก้ไขเรียบร้อย!!');
            return redirect("timeattendant");
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
           DB::table('ngg_empolyee_timeattendant')
            ->where('net_id', $id)
            ->update(['net_enable' => 0]);
            }
            return redirect("timeattendant");
    }
}
