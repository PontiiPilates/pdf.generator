<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PDFGenerator;
use App\Services\Uploader;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendDocument;

use Illuminate\Http\UploadedFile;



class IndexController extends Controller
{
    public function index(Request $request)
    {
        // ! валидация





        // ! хранение файлов
        $uploads = new Uploader();

        if ($request->hasFile('services_file_logo')) {
            $uploads->upload($request, 'services_file_logo');
        }
        if ($request->hasFile('executor_file_signature')) {
            $uploads->upload($request, 'executor_file_signature');
        }
        if ($request->hasFile('executor_file_stamp')) {
            $uploads->upload($request, 'executor_file_stamp');
        }
        if ($request->hasFile('customer_file_signature')) {
            $uploads->upload($request, 'customer_file_signature');
        }
        if ($request->hasFile('customer_file_stamp')) {
            $uploads->upload($request, 'customer_file_stamp');
        }






        // ! если форма отправлена
        if ($request->isMethod('POST')) {

            $html = view('pdf_templates.generate_document', [
                'uploads' => $uploads->getFiles(),
            ]);

            // $this->pdfGenerate($html);

            $some_data = new PDFGenerator($html);
            $some_data->generate();
            dd($some_data);
        }

        return view('pages.form');
    }

    public function pdfGenerate($html)
    {
        $some_data = new PDFGenerator($html);
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
