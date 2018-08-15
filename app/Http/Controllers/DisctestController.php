<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisctestController extends Controller
{
    public function index()
    {
        return view('disctest' );
    }
    public function start()
    {
        return view('testdisc');
    }
    public function answer()
    {
        return view('ansdisc');
    }
}
