<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\StudentController;
use  App\Http\Controllers\CertificateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/;

Route::get('/get-pdf', [PdfController::class, 'getPDF']);
Route::get('/pdf-view', [PdfController::class, 'pdfView']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/certificate/student-detail/{student}', [CertificateController::class, 'studentShow']);
    Route::post('/certificate/student/{student}', [CertificateController::class, 'generate']);
    Route::get('/certificate/get-types/', [CertificateController::class, 'getTypes']);
//

    Route::Resources([
        'student' => StudentController::class,
        'certificate' => CertificateController::class,
    ]);

});
