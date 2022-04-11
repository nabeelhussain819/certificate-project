<?php

namespace App\Http\Controllers;

use App\Helpers\ArrayHelper;
use App\Helpers\StringHelper;
use App\Models\Certificate;
use App\Models\CertificateType;
use App\Models\Student;
use App\Traits\InteractWithPdf;
use App\Traits\InteractWithQrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CertificateController extends Controller
{
    use InteractWithQrCode, InteractWithPdf;

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

            $record = ArrayHelper::merge($request->all(), ["student_id" => $student->id]);
            $certificate = new  Certificate();

            $certificate->fill($record);

            $certificate->save();
            $qrUrl = $this->generateQR($student, $certificate);

            $this->generatePdf($student, $certificate, $request);
        });
    }

    public function studentShow(Request $request, Student $student)
    {
        return $student->certificates()->get();
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
