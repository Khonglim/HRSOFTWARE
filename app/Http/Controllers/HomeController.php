<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $user = User::where('enable', '=', 1)->paginate(15);
        $data = array(
          'user' => $user
        );
        return view('home',$data );
    }

    
}
