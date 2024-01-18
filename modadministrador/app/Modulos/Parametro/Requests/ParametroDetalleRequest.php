<?php

namespace App\Modulos\Parametro\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParametroDetalleRequest extends FormRequest
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
            'vc_parametro_detalle'=>'required',
            'i_fk_id_parametro'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'vc_parametro_detalle.required' => 'Se requiere definir el detalle',
            'i_fk_id_parametro.required'=>'Se requiere definir el parametro al que pertenece'
        ];
    }
}
