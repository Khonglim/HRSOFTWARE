<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        
        
      $choice = DB::connection('mysql2')->select("SELECT * FROM tb_choice");
    
     $data = array(
        'choice' =>  $choice
    );

    
    return view('home',$data );
    }

    public function destroy($id)
    {
        
        
    }
}
