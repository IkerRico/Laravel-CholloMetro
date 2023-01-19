<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;


class GangaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:20',
            'url' => 'required|min:10',
            'category' => 'required',
            'price' => 'required',
            'price_sale' => 'required',
            'img' => ['required',File::image()],
        ];
    }

    public function messages()
{
    return [
        'required' => 'El campo es obligatorio',
        'min' => 'El campo no cumple la longitud'
    ];
}
}
