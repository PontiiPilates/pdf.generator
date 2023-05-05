<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PDFGeneratorRequest extends FormRequest
{
    // перенаправление при появлении невалидных данных
    protected $redirectRoute = 'index';


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'services_act_number' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'services_act_number.required' => 'Обязательно',
        ];
    }
}
