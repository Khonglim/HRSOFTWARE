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
use PDF;

class PDFController extends Controller
{
    public function pdfemployee($id)
    {
        $personal = Personal::find($id);
        $pdf = PDF::loadView('employ.pdf',['personal' => $personal ]);
        $pdf->setPaper('A4', 'portrait');
        return @$pdf->stream('employ.pdf');
    }

    public function pdftestmbti($id)
    {
        $testmbti = Testmbti::find($id);
        $pdf = PDF::loadView('testmbti.pdf_mbti',['testmbti' =>  $testmbti ]);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }

    
    public function pdftestdisc($id)
    {
        $testdisc = Testdisc::find($id);
        $pdf = PDF::loadView('testdisc.pdf_disc',['testdisc' =>  $testdisc]);
        $pdf->setPaper('A4', 'portrait');
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
        $pdf->setPaper('A4', 'portrait');
        
        return $pdf->stream();
    }





}
