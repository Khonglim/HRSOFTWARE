<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
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
        
        $company = DB::table("company")   
        ->leftJoin('department', 'company.id', '=', 'department.company_id')
        ->get();
        $data = array('company' => $company);
        return view('home',$data );
       
    }

    public function destroy($id)
    {
        
        $user = User::find($id);
        $user->enable =0;
        $user->save();
        return redirect('home'); 
    }
}
