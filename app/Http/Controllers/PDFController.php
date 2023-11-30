<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PDFController extends Controller
{          public function generatePdf()
    {
        $data = ['example' => 'data'];

        $pdf = PDF::loadView('data', $data);

        return $pdf->download('data.pdf');
    }  
}

