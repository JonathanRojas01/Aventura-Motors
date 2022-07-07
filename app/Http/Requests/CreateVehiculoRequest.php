<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehiculoRequest extends FormRequest
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
            'marca'         => 'required|exists:marcas,id',
            'categoria'     => 'required|exists:categorias,id',
            'modelo'        => 'required',
            'imagenes'      => 'required', //|mimes:jpeg,jpg,png|max:10240
        ];
    }

    public function messages()
    {
        return [
            'marca.required' => 'Elija una marca de la lista',
            'marca.exists' => 'No existe la marca elegida',
            'categoria.required' => 'Elija una categoria de la lista',
            'categoria.exists' => 'No existe la categoria elegida',
            'modelo.required' => 'El modelo del vehiculo es requerido',
            //'imagenes.mimes' => 'El archivo subido no es un archivo de imágen correcto',
            //'imagenes.max' => 'El tamaño máximo a subir es 10MB',
        ];
    }
}
