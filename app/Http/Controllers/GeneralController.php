<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Uploader;
use App\Services\PDFGenerator;
use App\Services\ValidatorHelper;

use App\Mail\SendDocument;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{

    /**
     * Возвращает главную страницу.
     */
    public function index()
    {
        return view('pages.form');
    }

    /**
     * Реализует логику при отправке формы.
     */
    public function send(Request $request)
    {

        // валидация данных запроса
        $validator = Validator::make($request->all(), ValidatorHelper::rules(), ValidatorHelper::messages());

        // действие при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('getGeneral'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();



        // сохранение файлов и запись их имён в переменные
        $services_file_logo = Uploader::upload($validated['services_file_logo']);
        $executor_file_signature = Uploader::upload($validated['executor_file_signature']);
        $executor_file_stamp = Uploader::upload($validated['executor_file_stamp']);
        $customer_file_signature = Uploader::upload($validated['customer_file_signature']);
        $customer_file_stamp = Uploader::upload($validated['customer_file_stamp']);



        // передача данных в представление
        $html = view('templates.pdf', [
            'validated' => $validated,
            'services_file_logo' => $services_file_logo,
            'executor_file_signature' => $executor_file_signature,
            'executor_file_stamp' => $executor_file_stamp,
            'customer_file_signature' => $customer_file_signature,
            'customer_file_stamp' => $customer_file_stamp,
        ]);

        // генерация PDF-документа
        $pdf_file = new PDFGenerator($html);
        $pdf_file->generate();
        $pdf_file_name = $pdf_file->file_name;



        // отправка PDF-документа на почту
        $email = $validated['executor_email'];
        $send = new SendDocument($pdf_file_name, 'Акт об оказании услуг');
        $mail = Mail::to($email)->send($send);

        if (Mail::failures()) {
            $request->session()->now('message', ['type' => 'danger', 'text' => 'Что-то пошло не так и почту отправить не удалось.']);
        } else {
            $request->session()->now('message', ['type' => 'success', 'text' => "PDF-документ успешно отправлен на почту $email"]);
        }

        return view('pages.form');
    }
}