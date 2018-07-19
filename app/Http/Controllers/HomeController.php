<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Position;
use App\Department;
use App\Employee;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $department= Department::all();
        $position = Position::all();
        $employee = Employee::all();
        $data1 = array('company' => $company,'department' => $department,'position' => $position,'employee' => $employee);
        return view('home',$data1);
    }
}
