<?php


namespace App\Traits;


use App\Models\Certificate;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

trait InteractWithQrCode
{

    public function generateQR(Student $student, Certificate $certificate): string
    {

        $qrUrl = $this->qr_createUrl($student, $certificate);
        $qr = QrCode::format('png')->size(100)->generate(url("/storage/$student->guid/pdf/$certificate->guid.pdf"));
        Storage::disk('public')->put($qrUrl, $qr);
        return $qrUrl;
    }

    private function qr_createUrl(Student $student, Certificate $certificate)
    {
        return $student->guid . '/qr/' . $certificate->guid . "." . Certificate::QR_FORMAT;
    }

}
