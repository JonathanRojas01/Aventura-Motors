<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVersionRequest extends FormRequest
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
            'nombre'            => 'required',
            'modelo'          => 'required|exists:vehiculo,id',
            'precio_lista'      => 'required|float',
            'caracteristicas.*' => 'required|exists:caracteristica,id',
        ];
    }

    public function messages()
    {
        return [
            'modelo.required' => 'Elija un modelo de la lista',
            'modelo.exists' => 'No existe el modelo elegido',
            'precio_lista.required' => 'El precio lista es requerida',
            'precio_lista.float' => 'El precio lista debe de ser un campo valido',
            'caracteristicas.required' => 'Elija al menos una caracteristica',
            'caracteristicas.exists' => 'No existe la caracteristica elegida',
            'nombre.required' => 'El nombre de la versión es requerido',
            //'imagenes.mimes' => 'El archivo subido no es un archivo de imágen correcto',
            //'imagenes.max' => 'El tamaño máximo a subir es 10MB',
        ];
    }
}
