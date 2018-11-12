<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngg_sector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector = Ngg_sector::where('nst_enable', '=', 1)->get();
        $data = array(
            'sector' => $sector
        );
        return view('ngg_sector/ngg_sector_index',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ngg_sector/ngg_sector_create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector = new Ngg_sector;
        $sector->nst_name = Input::get('name');
        $sector->nst_remark = Input::get('remark');
        $sector->save();

        Session::flash('flash_message','บันทึกสำเร็จ!!');
         return redirect("sectorsmanage");
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
            $sector = Ngg_sector::where('nst_enable', '=', 1)
            ->where('nst_id', '=',$id)
            ->get();
             $data = array(
            'sector' => $sector
            );
             return view('ngg_sector/ngg_sector_show',$data );
            }
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
            $sector = Ngg_sector::where('nst_enable', '=', 1)
            ->where('nst_id', '=',$id)
            ->get();
            $idd = $id;
             $data = array(
                'idd'=>$idd,
            'sector' => $sector
            );
             return view('ngg_sector/ngg_sector_edit',$data );
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
          
        DB::table('ngg_sector')
        ->where('nst_id', $id)
        ->update(['nst_name' => Input::get('name')]);

        DB::table('ngg_sector')
        ->where('nst_id', $id)
        ->update(['nst_remark' => Input::get('remark')]);

        Session::flash('flash_message','แก้ไขสำเร็จ!!');
        return redirect('sectorsmanage'); 
        }
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
        DB::table('ngg_sector')
        ->where('nst_id', $id)
        ->update(['nst_enable' => 0]);
    
        Session::flash('flash_message','ลบสำเร็จ!!');
        return redirect('sectorsmanage'); 
        }
    }
}
