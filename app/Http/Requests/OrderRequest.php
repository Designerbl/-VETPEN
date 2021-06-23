<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
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

          'name_order' => 'required|min:2|max:50',
          'pet_order' => 'required|min:2|max:50',
          'phone_order' => 'required',
          
        ];
    }

    public function messages(){
      return[
        // Перевод валидации поля "Ваше имя"
        'name_order.required' => 'Поле "Ваше имя" является обязательным',
        'name_order.min' => 'Для поля "Ваше имя" минимальное кол-во символов: 2',
        'name_order.max' => 'Для поля "Ваше имя" максимальное кол-во символов: 50',

        // Перевод валидации поля "Ваш питомец"
        'pet_order.required' => 'Поле "Ваш питомец" является обязательным',
        'pet_order.min' => 'Для поля "Ваш питомец" минимальное кол-во символов: 2',
        'pet_order.max' => 'Для поля "Ваш питомец" максимальное кол-во символов: 50',

        // Перевод валидации поля "Номер телефона"
        'phone_order.required' => 'Поле "Номер телефона" является обязательным',
      ];
    }
}
