<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class DocumentController extends Controller
{
    public function setup()
    {
        return view('document.setup');
    }
    public function print()
    {

        //test on browser first
        //return view('print');

        $pdf = Pdf::loadView('print', ['data' => 'data']);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->download('clearance.pdf');
    }
}
