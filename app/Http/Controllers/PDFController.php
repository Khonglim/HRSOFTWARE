<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Personal;
use App\Testmbti;
use App\Testdisc;
use App\Con_interview;
use App\Comment_interview;
use App\Comment_sup;
use App\Inter_sup;

use Illuminate\Support\Facades\DB;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Operate_qSup;
use App\Operate;


use PDF;



class PDFController extends Controller
{
    
    public function pdfemployee($id)
    {
        $personal = Personal::find($id);
        if($personal->recheck_Oper==1){
            $personal->recheck_Oper=0;

        }else{
            $personal->recheck_Oper=1;

        }
        $personal->degree=1;
        $personal->save();

        $pdf = PDF::loadView('employ.pdf',['personal' => $personal ]);
       
        return $pdf->stream('employ.pdf');
    }

    public function pdftestmbti($id)
    {
   
        $testmbti = Testmbti::find($id);
        $pdf = PDF::loadView('testmbti.pdf_mbti',['testmbti' =>  $testmbti 
        
        
        ]);
      
        return $pdf->stream();
    }

    
    public function pdftestdisc($id)
    {
        $testdisc = Testdisc::find($id);
        $pdf = PDF::loadView('testdisc.pdf_disc',['testdisc' =>  $testdisc]);
      
        return $pdf->stream();
    }


    public function pdfconall($id)
    {
        $personal = Personal::find($id);
        $testdisc  =  Testdisc::all();
        $testmbti  =  Testmbti::all();
        $comment_interview  = Comment_interview ::all();
        $con_interview  = Con_interview::all();
        $inter_sup  = Inter_sup::all();
        $comment_sup  = Comment_sup::all();


        $pdf = PDF::loadView('con_all.PDFtest',[
            'personal' =>  $personal,
            'testdisc' =>  $testdisc,
            'testmbti' =>  $testmbti,
            'comment_interview' => $comment_interview,
            'con_interview' => $con_interview,
            'inter_sup' =>  $inter_sup ,
            'comment_sup' =>   $comment_sup,
        ]);
    
        
        return $pdf->stream();
    }


   

    public function pdfoper_sup($id)
    {
          $operate = Operate::find($id);
          
          $data =array(
              'operate' =>$operate
          );
      
       
       return view("operate/sup/pdfSup",$data);
    }


}
