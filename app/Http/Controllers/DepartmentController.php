<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Company;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::where('enable', '=', 1)->paginate(4);
        $department = Department::where('enable', '=', 1)->paginate(4);
        $data = array('department' => $department , 'company' => $company  );
        return view('department',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formdepartment' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->department_name = $request->department_name;
        $department->department_head_id = $request->department_head_id;
        $department->company_id = $request->company_id;
        $department->Remark = $request->Remark;
        $department->save();
        return redirect('department');
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
            $department = Department::where('enable', '=', 1)->paginate(4);
            $data = array(
                'department' => $department
            );
            return view('formdepartment',$data);
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
        $department =  Department::find($id);
        $department->department_name = $request->department_name;
        $department->department_head_id = $request->company_id;
        $department->company_id = $request->company_id;
        $department->Remark = $request->Remark;
        $department->save();
        return redirect('department'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->enable =0;
        $department->save();
        return redirect('department'); 
    }
}
