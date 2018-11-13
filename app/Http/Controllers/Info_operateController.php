<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use DB;
use App\Operate;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Operate_qSup;
use App\Operate_staff;
use App\Operate_sup;

class Info_operateController extends Controller
{
    public function affiliation1($id)
    {
        if($id !== '') {
            $operate = Operate::find($id);
            $operate_Chioce   = Operate_Chioce::all();
            $operate_qSeff    = Operate_qSeff::all();
            $operate_qSup     = Operate_qSup::all();
            $operate_staff    = Operate_staff::all();
    


            $data = array(
                'operate' =>   $operate,
                'operate_Chioce' =>  $operate_Chioce,
                'operate_qSeff' =>   $operate_qSeff,
                'operate_staff' =>   $operate_staff,
                'operate_qSup' =>   $operate_qSup
            );

            
            return view('operate/send/send0',$data);
        }

        return "ผิดพลาด";

    }
    public function affiliation2($id)
    {



    }
    public function manager($id)
    {



    }
    public function personnel_manager($id)
    {



    }
    public function handler($id)
    {
        


    }

}
