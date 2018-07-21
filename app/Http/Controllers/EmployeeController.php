<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::where('enable', '=', 1)->paginate(4);
        $data = array(
            'employee' => $employee
        );
        return view('employee',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('formemployee' );
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
            'email' => 'required|string|email|max:255|unique:employee'
        ]);
 
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->nikname = $request->nikname;
        $employee->sex = $request->sex;
        $employee->birthday = $request->birthday;
        $employee->email = $request->email;
        $employee->save();
        

        return redirect('employee');
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
            $employee = Employee::where('enable', '=', 1)->paginate(4);
            $data = array(
                'employee' => $employee
            );
            return view('formemployee',$data);
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
        $employee =  Employee::find($id);
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->nikname = $request->nikname;
        $employee->birthday = $request->birthday;
        $employee->sex = $request->sex;
        $employee->email = $request->email;
        $employee->save();
        return redirect('employee'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $employee = Employee::find($id);
        $employee->enable =0;
        $employee->save();
        return redirect('employee'); 
    }
}
