<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngg_company;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $company = Ngg_company::where('ncp_enable', '=', 1)->get();
        $data = array(
            'company' => $company
        );

        
        return view('ngg_company/ngg_company_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ngg_company/ngg_company_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $company = new Ngg_company;
        $company->ncp_name = Input::get('name');
        $company->ncp_remark = Input::get('remark');
        $company->save();


        Session::flash('flash_message','สำเร็จ!! บันทึกเรียบร้อย');
         return redirect()->route("companysmanage");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

        if($id !== '') {


            $company = Ngg_company::where('ncp_enable', '=', 1)
            ->where('ncp_id', '=', $id)
            ->get();
            $data = array(
            'company' => $company
            );
                  }
         
        
        return view('ngg_company/ngg_company_show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
             $company = Ngg_company::where('ncp_enable', '=', 1)
            ->where('ncp_id', '=', $id)
            ->get();
            $idd = $id;
            $data = array(
                'company' => $company,
                'idd' => $idd
            );
            return view('ngg_company/ngg_company_edit',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($id !== '') {
             DB::table('ngg_company')
            ->where('ncp_id', $id)
            ->update(['ncp_name' => Input::get('name')]);

            DB::table('ngg_company')
            ->where('ncp_id', $id)
            ->update(['ncp_remark' => Input::get('remark')]);

        }
       
        Session::flash('flash_message','สำเร็จ!! แก้ไขเรียบร้อย');
         return redirect()->route("companysmanage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id !== '') {
        DB::table('ngg_company')
            ->where('ncp_id', '=', $id)
            ->where('ncp_enable', '=', 1)
            ->update(['ncp_enable' => 0]);
        }
       
        return redirect('companysmanage'); 
    }
}
