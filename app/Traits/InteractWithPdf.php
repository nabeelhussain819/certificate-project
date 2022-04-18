<?php


namespace App\Traits;


use App\Models\Certificate;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

trait InteractWithPdf
{

    public function generatePdf(Student $student, Certificate $certificate, array $data)
    {
        $certificate = $certificate->load('types');

        $data['typeName'] = $certificate->types->name;
        $data['qrUrl'] = "/storage/$student->guid/qr/$certificate->guid." . Certificate::QR_FORMAT;
        $data['alias']=   $certificate->types->alias;
        $fileName = $student->guid . '/pdf/' . $certificate->guid . '.pdf';
        $pdf = Pdf::loadView('pdf.certificate', compact('student', 'data'));
        $content = $pdf->download()->getOriginalContent();
        Storage::disk('public')->put($fileName, $content);
//        Pdf::loadFile('pdf.certificate')->save($fileName)->stream('download.pdf');
    }


}
