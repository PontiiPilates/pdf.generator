<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PDFGenerator;
use App\Services\Uploader;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendDocument;

use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Validator;

// use App\Http\Requests\PDFGeneratorRequest;

use App\Http\Controllers\Controller;

use App\Services\ValidatorHelper;
use Illuminate\Auth\Events\Validated;

class GeneralController extends Controller
{

    public function index()
    {
        return view('pages.form');
    }

    public function send(Request $request)
    {
        // создание валидатора по требованию
        $rules = ValidatorHelper::rules();
        $messages = ValidatorHelper::messages();
        $validator = Validator::make($request->all(), $rules, $messages);

        // при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('getGeneral'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();



        // сохранение файлов
        $services_file_logo = Uploader::upload($validated['services_file_logo']);
        $executor_file_signature = Uploader::upload($validated['executor_file_signature']);
        $executor_file_stamp = Uploader::upload($validated['executor_file_stamp']);
        $customer_file_signature = Uploader::upload($validated['customer_file_signature']);
        $customer_file_stamp = Uploader::upload($validated['customer_file_stamp']);
        
        // удаление объектов, хранящихся в массиве, чтобы не передавать их в представление
        unset($validated['services_file_logo']);
        unset($validated['executor_file_signature']);
        unset($validated['executor_file_stamp']);
        unset($validated['customer_file_signature']);
        unset($validated['customer_file_stamp']);

        // передача данных в представление
        return view('pdf_templates.generate_document', [
            'validated' => $validated,
            'services_file_logo' => $services_file_logo,
            'executor_file_signature' => $executor_file_signature,
            'executor_file_stamp' => $executor_file_stamp,
            'customer_file_signature' => $customer_file_signature,
            'customer_file_stamp' => $customer_file_stamp,
        ]);

        // $this->pdfGenerate($html);

        $some_data = new PDFGenerator($html);
        $some_data->generate();
        // dd($some_data);

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
