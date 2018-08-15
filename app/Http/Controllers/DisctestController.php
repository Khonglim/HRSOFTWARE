<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 use  Baraear\ThaiAddress\Models\SubDistrict;

class DisctestController extends Controller
{
    public function index()
    {
        $sub_districts = SubDistrict::all();

foreach ($sub_districts as $sub_district) {
    // แสดงข้อมูลตำบล
    print_r($sub_district);
    
    // แสดงข้อมูลอำเภอที่มีความสัมพันธ์กับตำบลนี้
    print_r($sub_district->district);
    
    // แสดงข้อมูลรหัสไปรษณีย์ที่มีความสัมพันธ์กับตำบลนี้
    print_r($sub_district->postal_code);
}
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
