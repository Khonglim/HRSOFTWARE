<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ngg_position;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Ngg_position::where('nps_enable', '=', 1)->get();
        $data = array(
            'position' => $position
        );
        return view('ngg_position/ngg_position_index',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ngg_position/ngg_position_create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $position = new Ngg_position;
        $position->nps_name = Input::get('name');
        $position->nps_remark = Input::get('remark');
        $position->save();

        Session::flash('flash_message','บันทึกสำเร็จ!!');
         return redirect("positionsmanage");
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
            $position = Ngg_position::where('nps_enable', '=', 1)
            ->where('id', '=',$id)
            ->get();
             $data = array(
            'position' => $position
            );
             return view('ngg_position/ngg_position_show',$data );
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
            $position = Ngg_position::where('nps_enable', '=', 1)
            ->where('id', '=',$id)
            ->get();
            $idd = $id;
             $data = array(
                'idd'=>$idd,
            'position' => $position
            );
            return view('ngg_position/ngg_position_edit',$data);
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
        DB::table('ngg_position')
        ->where('id', $id)
        ->update(['nps_name' => Input::get('name')]);

        DB::table('ngg_position')
        ->where('id', $id)
        ->update(['nps_remark' => Input::get('remark')]);

        Session::flash('flash_message','แก้ไขสำเร็จ!!');
        return redirect('positionsmanage'); 
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
        DB::table('ngg_position')
        ->where('id', $id)
        ->update(['nps_enable' => 0]);
    
        Session::flash('flash_message','ลบสำเร็จ!!');
        return redirect('positionsmanage'); 
        }
    }
}
