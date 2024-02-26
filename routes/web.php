<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Frontend\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [StudentController::class, 'signup'])->name('student.signup');

Route::post('/register', [StudentController::class, 'register'])->name('student.register');

Route::get('/signin', [StudentController::class, 'signin'])->name('student.signin');
Route::post('/login', [StudentController::class, 'login'])->name('student.login');

Route::get('/forgotpass', [StudentController::class, 'forgotpass'])->name('student.forgotpass');

Route::middleware('auth.student')->group(function () {
    Route::get('/regissv', [StudentController::class, 'regissv'])->name('student.regissv');
    Route::post('/store-regis-survey', [StudentController::class, 'storeRegissurvey'])->name('student.regissv.store');

    Route::get('/regiscoop', [StudentController::class, 'regiscoop'])->name('student.regiscoop');
    Route::post('/store-regis-coop', [StudentController::class, 'storeRegiscoop'])->name('student.regiscoop.store');

    Route::get('/stepcoop', [StudentController::class, 'stepcoop'])->name('student.stepcoop');

    Route::get('/company', [StudentController::class, 'company'])->name('student.company');

    Route::get('/regis', [StudentController::class, 'regis'])->name('student.regis');

    Route::get('/report', [StudentController::class, 'report'])->name('student.report');
    Route::post('/store-report', [StudentController::class, 'storeReport'])->name('student.report.store');
    Route::get('/report/{id}/delete', [StudentController::class, 'deleteReport'])->name('student.report.delete');

    Route::post('/logout', [StudentController::class, 'logout'])->name('student.logout');

    Route::post('/delete-image', [StudentController::class, 'deleteImage'])->name('student.delete.image');

    Route::get('/download-pdf/{id}/download', [PDFController::class, 'downloadPDF'])->name('download.pdf');

    Route::get('/download-pdf2/{id}/download', [PDFController::class, 'downloadPDF2'])->name('download.pdf2');

});


