<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Con_interview;
use App\Comment_interview;
use App\Comment_sup;
use App\Inter_sup;
use App\Personal;

class Con_allController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::where('enable','=', 1)->get();

        $data = array('personal' =>  $personal  );
      
        return view("con_all/ConAll",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        $comment_interview  = Comment_interview ::all();
        $con_interview  = Con_interview::all();
        $inter_sup  = Inter_sup::all();
        $comment_sup  = Comment_sup::all();
        $data = array(
            'personal' =>  $personal,
            'comment_interview' =>  $comment_interview ,
            'con_interview' =>  $con_interview ,
            'inter_sup' =>  $inter_sup,
            'comment_sup' =>  $comment_sup,
        );
        return view('con_all/show',$data);

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
