<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operate;
use App\Mail\HREmail;
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
           // $objEmail = new \stdClass();
           // $objEmail->email1 = $request->email1;
          //  $objEmail->link = $request->link;
          //  Mail::to($objEmail->email1)->send(new HREmail($objEmail));

            return redirect('Operate');

        }

          if($user->id== $id && $user->signa1_90_enable == 0){
              $operate = Operate::find($id);
              $operate->signa1_90_enable =1;
              $operate->save();
           //   $objEmail = new \stdClass();
          //  $objEmail->email2 = $request->email2;
         //   $objEmail->link = $request->link;
         //   Mail::to($objEmail->email2)->send(new HREmail($objEmail));
            return redirect('Operate');

          }
          if($user->id== $id && $user->signa2_enable == 0){
            $operate = Operate::find($id);
            $operate->signa2_enable =1;
            $operate->save();
           // $objEmail = new \stdClass();
          //  $objEmail->email3 = $request->email3;
          //  $objEmail->link = $request->link;
          //  Mail::to($objEmail->email3)->send(new HREmail($objEmail));
           return redirect('Operate');

        }

        if($user->id== $id && $user->signa3_enable == 0){
            $operate = Operate::find($id);
            $operate->signa3_enable =1;
            $operate->save();
          //  $objEmail = new \stdClass();
          //  $objEmail->email4 = $request->email4;
          //  $objEmail->link = $request->link;
          //  Mail::to($objEmail->email4)->send(new HREmail($objEmail));
            return redirect('Operate');

        }

        if($user->id== $id && $user->signa4_enable == 0){
            $operate = Operate::find($id);
            $operate->signa4_enable =1;
            $operate->save();
          //  $objEmail = new \stdClass();
           // $objEmail->email5 = $request->email5;
          //  $objEmail->link = $request->link;
          //  Mail::to($objEmail->email5)->send(new HREmail($objEmail));
            return redirect('Operate');

        }

    }
    //$objEmail = new \stdClass();
   // $objEmail->emailto = $request->emailto;
    //$objEmail->link = $request->link;
   // Mail::to($objEmail->emailto)->send(new HREmail($objEmail));
    return redirect('Operate');


  }
}