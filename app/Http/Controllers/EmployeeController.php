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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->nikname = $request->nikname;
        $employee->sex = $request->sex;
        $employee->birthday = $request->birthday;
        $employee->email = $request->email;
        $employee->save();
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
        $employee =  Employee::find($id);
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->nikname = $request->nikname;
        $employee->birthday = $request->birthday;
        $employee->sex = $request->sex;
        $employee->email = $request->email;
        $employee->save();
        return redirect('home'); 
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
        return redirect('home'); 
    }
}
