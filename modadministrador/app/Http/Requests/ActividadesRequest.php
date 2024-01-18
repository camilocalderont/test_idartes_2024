<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadesRequest extends FormRequest
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
            'vc_actividad'=>'required',
            'vc_descripcion'=>'required',
            'vc_modulo'=>'required',
        ];
    }
    public function messages()
    {
       return [

            'vc_actividad.required' => 'El nombre de la actividad es requerida',
            'vc_descripcion.required' => 'La descripción de la actividad es requerida',
            'vc_modulo.required' => 'Seleccionar el módulo es requerido',
        ]; 
    }
}
