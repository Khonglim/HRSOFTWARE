<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Department;
use App\Company;
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
        $company = Company::where('enable','=', 1)->get();
        $department = Department::where('enable', '=', 1)->get();
        $data = array('department' => $department , 'company' => $company  );
        return view('department/department',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
       $titles = Department::where('enable','=', 1)->pluck('department_name','id');
        $company = Company::where('enable','=', 1)->pluck('company_Name','id');
       
        $departments = Department::where('enable','=', 1)->paginate();
      
        $data = array('titles' => $titles, 'departments' => $departments ,'company' => $company );

        return view('department/formcreatedepartment',$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required|int',
            'department_name' => 'required|alpha',
        ]);
        $department = new Department;
        $department->department_name = $request->department_name;
        if ( Input::get('departtt') == 'threeCarDiv') {

           $department->department_head_id =$request->department_head_id_2;

        }elseif ( Input::get('departtt') == 'twoCarDiv') {

             $department->department_head_id=$request->department_head_id_1;

        }else{
            echo "none";
           
        }
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
             $department = Department::find($id);
            $companys =  Company::where('enable','=', 1)->get();
            $departments =  Department::where('enable','=', 1)->get();
            $data = array(
                'department' => $department,'departments' => $departments,'companys' => $companys 
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
        $this->validate($request, [
            'company_id' => 'required|alpha',
            'department_name' => 'required|alpha',
        ]);
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
