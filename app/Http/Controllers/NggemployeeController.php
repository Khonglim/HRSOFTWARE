<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngg_employee;
use App\Ngg_department;
use App\Ngg_company;
use App\Ngg_position;
use App\Ngg_level;
use App\Ngg_sector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class NggemployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
        $data = array(
            'ngg_employee' => $ngg_employee
        );
       return view('ngg_employee/ngg_employee_index',$data);    
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
        $ngg_department = Ngg_department::where('ndp_enable', '=', 1)->get();
        $ngg_company = Ngg_company::where('ncp_enable', '=', 1)->get();
        $ngg_position = Ngg_position::where('nps_enable', '=', 1)->get();
        $ngg_level = Ngg_level::where('nlv_enable', '=', 1)->get();
        $ngg_sector = Ngg_sector::where('nst_enable', '=', 1)->get();
        $data = array(
            'ngg_employee' => $ngg_employee,
            'ngg_department' => $ngg_department,
            'ngg_company' => $ngg_company,
            'ngg_position' => $ngg_position,
            'ngg_level' => $ngg_level,
            'ngg_sector' => $ngg_sector
        );
         return view('ngg_employee/ngg_employee_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $ngg_employee = new Ngg_employee;
         $ngg_employee->nem_code =Input::get('code');
         $ngg_employee->nem_id_card =Input::get('idcard');
         $ngg_employee->nem_thai_title =Input::get('thai_title_tname');
         $ngg_employee->nem_thai_firstname =Input::get('thai_name');
         $ngg_employee->nem_thai_lastname =Input::get('thai_lastname');
         $ngg_employee->nem_eng_title =Input::get('eng_title_tname');
         $ngg_employee->nem_eng_firstname =Input::get('eng_name');
         $ngg_employee->nem_eng_lastname =Input::get('eng_lastname');
         $ngg_employee->nem_nickname =Input::get('nickname');
         $ngg_employee->nem_birthday =Input::get('birthday');
         $ngg_employee->nem_company_id =Input::get('company');
         $ngg_employee->nem_position_id =Input::get('position');
         $ngg_employee->nem_department_id =Input::get('department');
         $ngg_employee->nem_sector_id =Input::get('sector');
         $ngg_employee->nem_level_id =Input::get('level');
         $ngg_employee->nem_remark =Input::get('remark');
         $ngg_employee->nem_salary=Input::get('salary');
         $ngg_employee->nem_sex=Input::get('sex');
         $ngg_employee->nem_enducation=Input::get('enducation');
         $ngg_employee->save();
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
        if($id !== '') {
          $ngg_employee = DB::table('ngg_employee')->where('nem_id', '=', $id)
              ->where('nem_enable', '=', 1)
              ->get();
          $idd = $id;
          $ngg_department = Ngg_department::where('ndp_enable', '=', 1)->get();
          $ngg_company = Ngg_company::where('ncp_enable', '=', 1)->get();
          $ngg_position = Ngg_position::where('nps_enable', '=', 1)->get();
          $ngg_level = Ngg_level::where('nlv_enable', '=', 1)->get();
          $ngg_sector = Ngg_sector::where('nst_enable', '=', 1)->get();
          $data = array(
            'ngg_employee' => $ngg_employee,
            'idd'=>$idd,
            'ngg_department' => $ngg_department,
            'ngg_company' => $ngg_company,
            'ngg_position' => $ngg_position,
            'ngg_level' => $ngg_level,
            'ngg_sector' => $ngg_sector
            );
            return view('ngg_employee/ngg_employee_show',$data);
        }
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
          $ngg_employee = DB::table('ngg_employee')->where('nem_id', '=', $id)
              ->where('nem_enable', '=', 1)
              ->get();
          $idd = $id;
          $ngg_department = Ngg_department::where('ndp_enable', '=', 1)->get();
          $ngg_company = Ngg_company::where('ncp_enable', '=', 1)->get();
          $ngg_position = Ngg_position::where('nps_enable', '=', 1)->get();
          $ngg_level = Ngg_level::where('nlv_enable', '=', 1)->get();
          $ngg_sector = Ngg_sector::where('nst_enable', '=', 1)->get();
          $data = array(
            'ngg_employee' => $ngg_employee,
            'idd'=>$idd,
            'ngg_department' => $ngg_department,
            'ngg_company' => $ngg_company,
            'ngg_position' => $ngg_position,
            'ngg_level' => $ngg_level,
            'ngg_sector' => $ngg_sector
                
            );
            return view('ngg_employee/ngg_employee_edit',$data);
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
            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_code' => Input::get('code')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_id_card' => Input::get('idcard')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_thai_title' => Input::get('thai_title_tname')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_thai_firstname' => Input::get('thai_name')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_thai_lastname' => Input::get('thai_lastname')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_eng_title' => Input::get('eng_title_tname')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_eng_firstname' => Input::get('eng_name')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_eng_lastname' => Input::get('eng_lastname')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_nickname' => Input::get('nickname')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_birthday' => Input::get('birthday')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_company_id' => Input::get('company')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_position_id' => Input::get('position')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_department_id' => Input::get('department')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_sector_id' => Input::get('sector')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_level_id' => Input::get('level')]);
            
            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_remark' => Input::get('remark')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_salary' => Input::get('salary')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_sex' => Input::get('sex')]);

            DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_enducation' => Input::get('enducation')]);
           
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
           DB::table('ngg_employee')
            ->where('nem_id', $id)
            ->update(['nem_enable' => 0]);
            }
            return redirect('nggemployee');
    }
}
