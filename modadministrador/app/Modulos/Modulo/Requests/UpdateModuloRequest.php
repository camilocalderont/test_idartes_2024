<?php

namespace App\Modulos\Modulo\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModuloRequest extends FormRequest
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
            'i_pk_id' => 'required',
            'vc_nombre' => 'required|max:255',
            'vc_redireccion' => 'required',
            'vc_imagen' => 'required',
            'vc_estado' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'i_pk_id.required' => 'No hay un identificador de datos.',
            'vc_nombre.required' => 'El nombre de la institución es requerida',
            'vc_redireccion.required' => 'La url es requerido',
            'vc_imagen.required' => 'La dirección url de la imagen es reuqerida',
            'vc_estado.required' => 'El estado es requerido',
        ];
    }
}