<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarcaRequest extends FormRequest
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
            'nombre' => 'required',
            'logo'  => 'mimes:jpeg,jpg,png|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la marca es requerido',
            'logo.mimes' => 'El archivo subido no es un archivo de imágen correcto',
            'logo.max' => 'El tamaño máximo a subir es 10MB',
        ];
    }
}
