<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Mail\HR_NGG_GROUP;
use Illuminate\Support\Facades\Mail;
use App\Manpower;
class Email_sendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $manpower =  Manpower::find($id);
        $manpower->Send_enable=1;
        $manpower->save();

        $sed_mail =  new \stdClass();
        $sed_mail->mail = $request->mail;
        Mail::to("narathorn182539@gmail.com")->send(new HR_NGG_GROUP($sed_mail));
        Session::flash('flash_message','ระบบได้ทำการส่งเมลล์เรียบร้อยแล้ว');
        return redirect('manpower');
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
