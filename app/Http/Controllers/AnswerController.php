<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
