<?php

namespace App\Services;

/**
 * Хранит в себе конфигурацию валидации.
 */
class ValidatorHelper
{
    /**
     * Содержит правила валидации.
     * 
     * @return array
     */
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
            'customer_email' => 'email:rfc,dns',

            'executor_adress' => '',
            'executor_company_name' => '',
            'customer_company_name' => '',
            'executor_inn' => '',
            'executir_kpp' => '',
            'customer_inn' => '',
            'customer_kpp' => '',
            'executor_adress' => '',
            'customer_arderss' => '',
            'executor_payment_account' => '',
            'customer_payment_account' => '',
            'executor_correspondent_account' => '',
            'customer_correspondent_account' => '',
            'executor_bank' => '',
            'customer_bank' => '',
            'executor_bank_bik' => '',
            'customer_bank_bik' => '',
            'executor_phone' => '',
            'customer_bank_phone' => '',
            'executor_name' => '',
            'customer_name' => '',

            // правила для валидации всех загруженных файлов
            'services_file_logo' => 'required|image|max:3000|file',
            'executor_file_signature' => 'required|image|max:3000|file',
            'executor_file_stamp' => 'required|image|max:3000|file',
            'customer_file_signature' => 'required|image|max:3000|file',
            'customer_file_stamp' => 'required|image|max:3000|file',
        ];
    }

    /**
     * Cодержит пользовательские сообщения.
     * 
     * @return array
     */
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