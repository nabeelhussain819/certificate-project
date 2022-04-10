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
        $qr = QrCode::format('svg')->generate(url("/certificate/$certificate->guid"));
        $qrUrl = $this->qr_createUrl($student, $certificate);
        Storage::disk('public')->put($qrUrl, $qr);
        return $qrUrl;
    }

    private function qr_createUrl(Student $student, Certificate $certificate)
    {
        return $student->guid . '/qr/' . $certificate->guid . '.svg';
    }

}
