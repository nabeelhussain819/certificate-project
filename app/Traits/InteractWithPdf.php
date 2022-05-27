<?php


namespace App\Traits;


use App\Models\Certificate;
use App\Models\Student;
use App\Models\Grade;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

trait InteractWithPdf
{

    public function generatePdf(Student $student, Certificate $certificate,  array $data)
    {
        $certificate = $certificate->load('types');
        //  $data['grades']= Grade::select("name")->get();

        $data['has_module'] = $certificate->types->has_module;
        $data['typeName'] = $certificate->types->name;
        $data['qrUrl'] = "/storage/$student->guid/qr/$certificate->guid." . Certificate::QR_FORMAT;
        $data['alias'] = $certificate->types->alias;
        $data['punkte'] = $certificate->types->punkte;
        $data['total_marks'] = $certificate->types->total_marks;
        $data['grades'] = Grade::where('certificate_name',$data['alias'] )->get();
        $data['date_of_examination'] = $certificate->date_of_examination->format("d.m.y");
        $data['has_module'] ?
         $data['obtained'] = $data['listening'] +  $data['reading'] + $data['writing'] + $data['language_module'] +$data['oral'] :
        $data['obtained'] = $data['listening'] +  $data['writing'] + $data['reading']  + $data['oral'];

        $fileName = $student->guid . '/pdf/' . $certificate->guid . '.pdf';
        $pdf = Pdf::loadView('pdf.certificate', compact('student', 'data' ));
        $content = $pdf->download()->getOriginalContent();
        Storage::disk('public')->put($fileName, $content);
//        Pdf::loadFile('pdf.certificate')->save($fileName)->stream('download.pdf');
    }


}
