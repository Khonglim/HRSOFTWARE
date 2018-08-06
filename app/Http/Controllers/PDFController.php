<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $company = Company::all();
        $pdf = PDF::loadView('pdf',['company' => $company]);
        return @$pdf->stream();
    }
}
