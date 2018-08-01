<?php

namespace App\Http\Controllers;
use App\Position;
use Illuminate\Http\Request;
use App\Department;
use App\Company;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::where('enable', '=', 1)->get();
        $company = Company::where('enable', '=', 1)->get();
        $department = Department::where('enable', '=', 1)->get();
        $data = array(
            'position' => $position,'department' => $department ,'company' => $company
        );
        return view('position',$data );
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
       
        $departments = department::where('enable','=', 1)->paginate();
      
        $data = array('titles' => $titles, 'departments' => $departments ,'company' => $company );

        return view('formcreateposition',$data );
        
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
            'position_name' => 'required',
        
        ]);
        $position = new Position;
        $position->position_name = $request->position_name ;
        $position->Department_ID = $request->Department_ID;
        $position->Remark = $request->Remark;
        $position->save();
        return redirect('position');
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
            $position = Position::find($id);
            $company =  Company::where('enable','=', 1)->get();
            $department =  department::where('enable','=', 1)->get();
            $positions =  Position::where('enable','=', 1)->get();

            $data = array(
                'position' => $position,'positions' => $positions,'company' => $company,'department' => $department
            );
            return view('formposition',$data);
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
            'position_name' => 'required',
        
        ]);
        $position =  Position::find($id);
        $position->position_name = $request->position_name;
        $position->Department_ID = $request->Department_ID;
        $position->Remark = $request->Remark;
        $position->save();
        return redirect('position'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::find($id);
        $position->enable =0;
        $position->save();
        return redirect('position'); 
    }
}
