<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'filling' => 'required|string',
            'price' => 'required|integer',
            'type_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'integer' => 'Данные в :attribute должны быть числом',
        ];
    }

//    public function  attributes()
//    {
//        return [
//            'filling' => 'category filling',
//            'price' => 'category price',
//            'type_id' => 'category type_id',
//        ];
//    }

}
