<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function getPDF(Request $request)
    {
        $pdf = Pdf::loadView('pdf.certificate', ['data', 'data'  ]);
        return $pdf->download('certificate.pdf');
    }

    public function pdfView(Request $request)
    {

        return view('pdf.certificate');
    }
}
