<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operate;
class Email_operateController extends Controller
{
    public function email_send(Request $request)
    {
        $id=$request->id;
        $operater = Operate::all();
        foreach ( $operater as  $user){
          if($user->id== $id && $user->signa1_90_enable == 0){
              $operate = Operate::find($id);
              $operate->signa1_90_enable =0;
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