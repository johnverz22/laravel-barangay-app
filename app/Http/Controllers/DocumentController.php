<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class DocumentController extends Controller
{
    public function print(){

        //test on browser first
        //return view('print');

        $pdf = Pdf::loadView('print', ['data' => 'data']);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->download('clearance.pdf');
    }
}
