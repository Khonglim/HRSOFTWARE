<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Personal;
use PDF;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $personal = Personal::find($id);
        $pdf = PDF::loadView('employ.pdf',['personal' => $personal ]);
        return $pdf->stream();
    }
}
