<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
          
          'name' => 'required|min:2|max:50',
          'pet_type' => 'required|min:2|max:50',
          'review_text' => 'required|max:500',
          
        ];
    }

    public function messages(){
      return[
        // Перевод валидации поля "Имя"
        'name.required' => 'Поле "Имя" является обязательным',
        'name.min' => 'Для поля "Имя" минимальное кол-во символов: 2',
        'name.max' => 'Для поля "Имя" максимальное кол-во символов: 50',

        // Перевод валидации поля "Вид животного"
        'pet_type.required' => 'Поле "Вид животного" является обязательным',
        'pet_type.min' => 'Для поля "Вид животного" минимальное кол-во символов: 2',
        'pet_type.max' => 'Для поля "Вид животного" максимальное кол-во символов: 50',

        // Перевод валидации поля "Отзыв"
        'review_text.required' => 'Поле "Отзыв" является обязательным',
        'review_text.max' => 'Для поля "Отзыв" максимальное кол-во символов: 500',
      ];
    }
}
