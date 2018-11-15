<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operate;
use App\Mail\HRSystemEmail;
use Illuminate\Support\Facades\Mail;
class Email_operateController extends Controller
{
    public function email_send(Request $request)
    {
        $id=$request->id;
        
        $operater = Operate::all();
        foreach ( $operater as  $user){
          if($user->id== $id && $user->signa1_60_enable == 0){
            $operate = Operate::find($id);
            $operate->signa1_60_enable =1;
            $operate->save();
            $objEmail = new \stdClass();
            $objEmail->email1 = $request->email1;
            $objEmail->link1 = $request->link1;
            Mail::to($objEmail->email1)->send(new HRSystemEmail($objEmail));

          return "สำเสร็จ";

        }

          if($user->id== $id && $user->signa1_90_enable == 0){
              $operate = Operate::find($id);
              $operate->signa1_90_enable =1;
              $operate->save();
            return "เสร็จ";

          }
          if($user->id== $id && $user->signa2_enable == 0){
            $operate = Operate::find($id);
            $operate->signa2_enable =1;
            $operate->save();
          return "เสร็จ";

        }

        if($user->id== $id && $user->signa3_enable == 0){
            $operate = Operate::find($id);
            $operate->signa3_enable =1;
            $operate->save();
          return "เสร็จ";

        }

        if($user->id== $id && $user->signa4_enable == 0){
            $operate = Operate::find($id);
            $operate->signa4_enable =1;
            $operate->save();
          return "เสร็จ";

        }

    }
    return "ส่งไปแล้ว";


  }
}