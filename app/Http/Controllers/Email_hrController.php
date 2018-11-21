<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use App\Email_HR;
use Illuminate\Validation\Rule;

class Email_hrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Email_HR::all();
        $data = array(
            'email' => $email
        );
       return view('email_hr/index_hr',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email_hr/create_hr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email_hr' => 'required|string|email|max:255|unique:email__h_r',
           
   
            
        ]);
         $email_hr = new Email_HR;
         $email_hr->email_hr =  $request->email_hr;
         $email_hr->save();
         Session::flash('flash_message','บันทึกสำเร็จ!!');
        return redirect('Email_HR');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $email_hr =  Email_HR::find($id);
        
        if(  $email_hr->email_enable ==  0){
        $email_hr->email_enable =  1;
        Session::flash('flash_message', 'ยกเลิกระงับการส่งเมมล์สำเร็จ!!');
    
    }else{
        $email_hr->email_enable =  0;
        Session::flash('flash_message', 'ระงับการส่งเมมล์สำเร็จ!!');
    }
        $email_hr->save();
       
        return redirect('Email_HR');
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
            $email_hr = Email_HR::find($id);
            $data = array(
                'email_hr' => $email_hr
            );
            return view('email_hr/edit_hr',$data);
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
        $this->validate($request,[
            
            'email_hr' => ['required',Rule::unique('email__h_r')->ignore($id), ],
   
            
        ]);
         $email_hr =  Email_HR::find($id);
         $email_hr->email_hr =  $request->email_hr;
         $email_hr->save();
         Session::flash('flash_message', 'แก้ไขสำเร็จ!!');
         return redirect('Email_HR');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manpower = Email_HR::find($id);
        $manpower->delete();
        Session::flash('flash_message', 'ลบสำเร็จ!!');
        return redirect('Email_HR');
    }
}
