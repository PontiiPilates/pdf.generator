<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PDFGenerator;

class IndexController extends Controller
{
    public function pdfGenerate()
    {
        $some_data = new PDFGenerator('Архитектурно правильный вариант работы программы.');
        $some_data->generate();

        return view('layout', ['some_data' => $some_data->file_name]);
    }
}
