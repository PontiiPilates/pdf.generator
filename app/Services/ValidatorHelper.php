<?php

namespace App\Services;

class ValidatorHelper
{
    public static function rules()
    {
        return [
            'services_act_number' => 'min:3|required',

            'services_file_logo' => 'required',
            'executor_file_signature' => 'required',
            'executor_file_stamp' => 'required',
            'customer_file_signature' => 'required',
            'customer_file_stamp' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'required' => 'Это поле должно быть заполнено.',
            'min' => 'Это поле должно быть заполнено больше :min символов.',

        ];
    }
}
