<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PDFGenerator;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendDocument;

class IndexController extends Controller
{
    public function pdfGenerate()
    {
        $some_data = new PDFGenerator('Архитектурно правильный вариант работы программы.');
        $some_data->generate();

        return view('layout', ['some_data' => $some_data->file_name]);
    }

    public function mailSend(Request $reauest)
    {
        $send = new SendDocument('nCDYY4eycp.pdf', 'Акт выполненных услуг заказчику');
        $mail = Mail::to('s.m.leshukov@gmail.com')->send($send);
        return 'Send Done';
    }
}
