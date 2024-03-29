<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Repositories\FormSurveyRepository;
use App\Repositories\FormRegisterRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function downloadPDF(int $id)
    {

        $form_surveys = DB::table('form_surveys')
            ->where('id', $id)
            ->get();

        // Read HTML file content
        $pdf = PDF::loadView('pages.svPDF', ['form_surveys' => $form_surveys]);

        $pdfFilePath = public_path('formsurvey.pdf');
        $pdf->save($pdfFilePath);

        return response()->download($pdfFilePath)->deleteFileAfterSend(true);

    }

    public function downloadPDF2(int $id)
    {

        $form_registers = DB::table('form_registers')
            ->where('id', $id)
            ->get();

        // Read HTML file content
        $pdf = PDF::loadView('pages.coopPDF', ['form_registers' => $form_registers]);

        $pdfFilePath = public_path('formregister.pdf');
        $pdf->save($pdfFilePath);

        return response()->download($pdfFilePath)->deleteFileAfterSend(true);

    }
}
