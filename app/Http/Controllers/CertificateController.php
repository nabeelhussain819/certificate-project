<?php

namespace App\Http\Controllers;

use App\Helpers\ArrayHelper;
use App\Helpers\StringHelper;
use App\Models\Certificate;
use App\Models\CertificateType;
use App\Models\Student;
use App\Traits\InteractWithQrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CertificateController extends Controller
{
    use InteractWithQrCode;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTypes()
    {
        return CertificateType::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function generate(Request $request, Student $student)
    {
        return DB::transaction(function () use ($request, $student) {
            $data = $request->all();

            $record = ArrayHelper::merge($data, ["student_id" => $student->id]);
            $certificate = new  Certificate();

            $certificate->fill($record);
//            QrCode::format('svg')->margin(0)->size(200)->generate("asd");
            $certificate->save();
            $qrUrl = $this->generateQR($student, $certificate);
            
        });
    }

    public function getStudentCertificatePdf(Request $request, Student $student)
    {
        $data1 = $request->all();
        $data1['student_id'] = $student->id;

        $record = ArrayHelper::merge($data1, ["student_id" => $student->id]);
        $certificate = new  Student();
        $certificate->fill([
            ['first_name' => "asd"]
        ]);

        dd($certificate);
        $certificate->save();
        dd($certificate);

//        $pdf = Pdf::loadView('pdf.certificate', compact('student', 'data'));
//        $fileName = StringHelper::trimLower($student->first_name . $student->last_name) . '.pdf';
//        return $pdf->download($fileName);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
