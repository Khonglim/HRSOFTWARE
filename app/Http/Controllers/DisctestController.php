<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DisctestController extends Controller
{
    public function index()
    {
       
     return view('testdisc/disctest' );
    }
    public function start()
    {
        $personal = DB::table('personal')->get();
        $disc = DB::table('disc')->get();
        $data = array( 'disc' =>  $disc,'personal' =>  $personal);
        return view('testdisc/testdisc',$data);
    }
    public function answer()
    {
        return view('testdisc/ansdisc');
    }
}
