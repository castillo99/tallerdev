<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            
            'documento_identidad' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'genero' => 'required',
            'fecha_nacimiento' => 'required',
            'edad' => 'required',
            'nombre_padre' => 'required',
            'nombre_madre' => 'required',
            'telefono' => 'required',
            'email'=> 'email',

        ];
    }

    public function messages()
    {
        return [
            'documento_identidad.required' => 'El documento es un campo requerido',
            'nombre.required' => 'El nombre debe ser un campo requerido',
            'apellido.required' => 'El apellido debe ser un campo requerido',
            'genero.required' => 'El genero debe ser un campo requerido',
            'fecha_nacimiento.required' => 'La fecha debe ser un campo requerido',
            'edad.required' => 'La edad debe ser un campo requerido',
            'nombre_padre.required' => 'El nombre padre debe ser un campo requerido',
            'nombre_madre.required' => 'El nombre madre debe ser un campo requerido',
            'telefono.required' => 'El telefono debe ser un campo requerido',
            'email.email' => 'El correo debe tener un formato correcto',

        ];
    }
        
}
