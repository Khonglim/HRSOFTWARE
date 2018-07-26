<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Department;
use App\Company;
use App\Position;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class DynamicDependent extends Controller
{
 


 public function index()

    {
        $countries = DB::table('Company')->pluck("company_Name","id");
         $data = array(
            'countries' => $countries
        );
        return view('dynamicdependent',$data);
    }

     public function getStates($id) {

        $states = DB::table("Department")->where("company_id",$id)->pluck("department_name","id");

        return json_encode($states);

    }

    public function getStates2($id) {

        $states2 = DB::table("Position")->where("department_id",$id)->pluck("position_name","id");

        return json_encode($states2);

    }

}
