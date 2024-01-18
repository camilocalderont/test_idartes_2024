<?php

namespace App\Modulos\Modulo\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveModuloRequest extends FormRequest
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
            'vc_nombre' => 'required|max:255',
            'vc_redireccion' => 'required',
            'vc_imagen' => 'required',
            'vc_estado' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'vc_nombre.required' => 'El nombre del módulo es requerido',
            'vc_redireccion.required' => 'La dirección url es requerida',
            'vc_imagen.required' => 'La dirección url de la imagen es reuqerida',
            'vc_estado.required' => 'El estado es requerido',
        ];
    }
}
