<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ngg_department;
use Illuminate\Support\Facades\DB;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
         $department = Ngg_department::where('ndp_enable', '=', 1)->get();
         $data = array(
           'department' => $department
        );
        
        return view('ngg_department/ngg_department_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('ngg_department/ngg_department_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $department =  new Ngg_department;
       $department->ndp_name = Input::get('name');
       $department->ndp_remark = Input::get('remark');
       $department->save();
        return redirect('departmentsmanage');
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
          $department = Ngg_department::where('ndp_enable', '=', 1)
          ->where('ndp_id', '=', $id)
          ->get();
         $data = array(
           'department' => $department
        );
        return view('ngg_department/ngg_department_show',$data); 
            
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
           $department = Ngg_department::where('ndp_enable', '=', 1)
            ->where('ndp_id', '=', $id)
            ->get();
            $idd = $id;
            $data = array(
           'department' => $department,
           'idd' => $idd 
            );

            return view('ngg_department/ngg_department_edit',$data);
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
            
            DB::table('ngg_department')
            ->where('ndp_id', $id)
            ->update(['ndp_name' => Input::get('name')]);

            DB::table('ngg_department')
            ->where('ndp_id', $id)
            ->update(['ndp_remark' => Input::get('remark')]);

            Session::flash('flash_message','สำเร็จ!! แก้ไขเรียบร้อย');
            return redirect('departmentsmanage'); 
        }
       
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('ngg_department')
            ->where('ndp_id', $id)
            ->update(['ndp_enable' => 0]);

        Session::flash('flash_message','สำเร็จ!! ลบเรียบร้อย');
        return redirect('departmentsmanage'); 
    }
}
