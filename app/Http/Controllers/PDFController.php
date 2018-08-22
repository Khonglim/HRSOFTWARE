<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Personal;
use App\Testmbti;
use App\Testdisc;
use PDF;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $personal = Personal::find($id);
        $pdf = PDF::loadView('employ.pdf',['personal' => $personal ]);
       
        return $pdf->stream();
    }

    public function pdftestmbti($id)
    {
        $testmbti = Testmbti::find($id);
        $pdf = PDF::loadView('testmbti.pdf_mbti',['testmbti ' =>  $testmbti ]);
       
        return $pdf->stream();
    }

    
    public function pdftestdisc($id)
    {
        $testdisc = Testdisc::find($id);
        $pdf = PDF::loadView('testdisc.pdf_disc',['testdisc' =>  $testdisc ]);
       
        return $pdf->stream();
    }
}
