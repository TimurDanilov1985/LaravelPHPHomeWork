<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfGeneratorController extends Controller
{
    //
    public function index($id){
        echo $id;
    }
}
