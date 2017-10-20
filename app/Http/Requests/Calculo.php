<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Calculo extends FormRequest
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
            'sopas' => 'required|formato_sopa_letra'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'sopas.required'  => 'No ha ingresado nada',
            'sopas.formato_sopa_letra' => 'La data ingresada no cumple con las caracteristicas de una sopa de letras'
        ];
    }
}
