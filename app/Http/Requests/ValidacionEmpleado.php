<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEmpleado extends FormRequest
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
            'cedula' => 'required|max:8|unique:empleados,cedula'.$this->route('id'),
            'apellidos' => 'required|max:20',
            'nombre' => 'required|max:20',
            'fecha_nacimiento' => 'required|max:10',
            'fecha_ingreso' =>  'required|max:10',
            'telefono' =>  'required|max:12',
            'direccion' => 'required|max:150',
            'ciudad' =>  'required|max:20',
            'email' =>  'required|max:100',
            'zona_postal' =>  'required|max:5'
        ];
    }
}
