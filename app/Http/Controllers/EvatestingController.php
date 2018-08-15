<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Evatest;

class EvatestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evatest = Evatest::all();
        $a =0;
         $data = array(
            'evatest' => $evatest ,'a' => $a
        );        return view("testeva/starttest",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("testeva/evatesting");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                            'part1_1' => 'required',
                            'part1_2' => 'required',
                            'part1_3' => 'required',
                            'part1_4' => 'required',
                            'part1_5' => 'required',
                        ]);

        $evatest = new Evatest;
        $evatest->part1_1 = $request->part1_1;
        $evatest->part1_2 = $request->part1_2;
        $evatest->part1_3 = $request->part1_3;
        $evatest->part1_4 = $request->part1_4;
        $evatest->part1_5 = $request->part1_5;
        $evatest->save();
        $a =1;
        return redirect('testeva/starttest',$a);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
