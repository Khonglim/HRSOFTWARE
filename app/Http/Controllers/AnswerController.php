<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AnswerController extends Controller
{
    public function index()
    {
        return view('testmbti/start');
    }
    public function start()
    {   $testemp = DB::table('personal')->get();
        $choice = DB::table('tb_choice')->get();
        $data = array( 'choice' =>  $choice,'testemp' =>  $testemp);
        return view('testmbti/test',$data);
    }
    public function answer()
    {
        return view('testmbti/ans');
    }
    public function startdisc()
    {
        $testemp= DB::table('personal')->get();
        $disc = DB::table('disc')->get();
        $data = array( 'disc' =>  $disc,'testemp' =>  $testemp);
        return view('testdisc/testdisc',$data);
    }
    public function answerdisc()
    {
        return view('testdisc/ansdisc');
    }
}
