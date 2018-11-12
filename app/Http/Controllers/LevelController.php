<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ngg_level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $level = Ngg_level::where('nlv_enable', '=', 1)->get();
        $data = array(
            'level' => $level
        );
        return view('ngg_level/ngg_level_index',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ngg_level/ngg_level_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $level = new Ngg_level;
        $level->nlv_name = Input::get('name');
        $level->nlv_remark = Input::get('remark');
        $level->save();

        Session::flash('flash_message','บันทึกสำเร็จ!!');
         return redirect("levelsmanage");
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
            $level = Ngg_level::where('nlv_enable', '=', 1)
            ->where('nlv_id', '=',$id)
            ->get();
             $data = array(
            'level' => $level
            );
             return view('ngg_level/ngg_level_show',$data );
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
            $level = Ngg_level::where('nlv_enable', '=', 1)
            ->where('nlv_id', '=',$id)
            ->get();
             $idd = $id;
             $data = array(
                'idd'=>$idd,
            'level' => $level
            );
             return view('ngg_level/ngg_level_edit',$data );
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
          
        DB::table('ngg_level')
        ->where('nlv_id', $id)
        ->update(['nlv_name' => Input::get('name')]);

        DB::table('ngg_level')
        ->where('nlv_id', $id)
        ->update(['nlv_remark' => Input::get('remark')]);

        Session::flash('flash_message','แก้ไขสำเร็จ!!');
        return redirect('levelsmanage'); 
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
        DB::table('ngg_level')
        ->where('nlv_id', $id)
        ->update(['nlv_enable' => 0]);
    
        Session::flash('flash_message','ลบสำเร็จ!!');
        return redirect('levelsmanage'); 
        }
    }
}
