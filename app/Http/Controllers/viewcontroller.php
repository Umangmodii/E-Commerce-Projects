<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PDF;

class viewcontroller extends Controller
{
    //
    public function generatePdf()
    {
        $data = ['example' => 'data'];

        $pdf = PDF::loadView('pdf.data', $data);

        return $pdf->download('data.pdf');
    }
}
