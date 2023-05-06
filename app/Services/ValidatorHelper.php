<?php

namespace App\Services;

class ValidatorHelper
{
    // содержит правила валидации
    public static function rules()
    {
        $current_date = date('d-m-Y', time());

        return [
            // правила для валидации некоторых данных
            'services_act_number' => 'required|min:3|max:64|alpha_dash',
            'cervices_act_date' => "required|date_equals:$current_date",
            'services_executor' => 'required|min:3|max:64',
            'services_services_name' => 'required|min:3|max:64',
            'services_cost' => 'required|numeric',
            'executor_email' => 'email:rfc,dns',

            // правила для валидации всех загруженных файлов
            'services_file_logo' => 'required|image|max:3000|file',
            'executor_file_signature' => 'required|image|max:3000|file',
            'executor_file_stamp' => 'required|image|max:3000|file',
            'customer_file_signature' => 'required|image|max:3000|file',
            'customer_file_stamp' => 'required|image|max:3000|file',
        ];
    }

    // содержит пользовательские сообщения
    public static function messages()
    {
        return [
            'required' => 'Обязательно для заполнения.',
            'min' => 'Должно быть больше :min символов.',
            'max' => 'Не должно быть больше :min символов.',
            'alpha_dash' => 'Может содержать только буквы, цифры, дефис и подчёркивания.',
            'alpha' => 'Может содержать только буквы, цифры, дефис и подчёркивания.',
            'date_equals' => 'Должна быть равна сегодняшней дате.',
            'numeric' => 'Должно быть числом.',
            'image' => 'Должно быть изображением.',
            'size' => 'Не должно превышать 3 Мб.',
            'file' => 'Не удалось загрузить файл.',
        ];
    }
}