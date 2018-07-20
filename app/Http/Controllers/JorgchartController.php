<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Position;
use App\Department;
use App\Employee;
use Illuminate\Support\Facades\DB;
class JorgchartController extends Controller
{
      public function company()
    {
    	$company = Company::all();
        $department= Department::all();
        $position = Position::all();
        $employee = Employee::all();
        $data1 = array('company' => $company,'department' => $department,'position' => $position,'employee' => $employee);
        return view('/orgchartcompany',$data1);
    }
      public function department()
    {
        return view('/orgchartdepartment');
    }
      public function position()
    {
        return view('/orgchartposition');
    }
     public function test()
    {
    	$company = Company::all();
        $department= Department::all();
        $position = Position::all();
        $employee = Employee::all();
        $data1 = array('company' => $company,'department' => $department,'position' => $position,'employee' => $employee);
        return view('/homeshowcompany',$data1);
    }
}
