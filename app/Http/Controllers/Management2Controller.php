<?php

namespace App\Http\Controllers;

use App\Formfor;
use App\Ngg_employee;
use App\Employeetotest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class Management2Controller extends Controller
{
     public function index()
    {
            $formfor = Formfor::all();
            $ngg_employee = Ngg_employee::where('nem_enable', '=', 1)->get();
            $employeetotest = Employeetotest::where('nee_enable', '=', 1)->get();
            $data = array(
                'formfor' => $formfor,
                'employeetotest' => $employeetotest,
                'ngg_employee' => $ngg_employee
            );
        return view('testevamanage/officerNmanagerCreate',$data);
    }
}
