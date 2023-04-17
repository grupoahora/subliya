<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDesignRequest extends FormRequest
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
            'name' => 'required',
            'reference' => 'required',
            'description' => 'min:50',
            'category_id' => 'required',
            'subcategory_id' => 'required',
          
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'description.min' => 'La descripción debe ser minimo de 50 caracteres',


        ];
    }
}
