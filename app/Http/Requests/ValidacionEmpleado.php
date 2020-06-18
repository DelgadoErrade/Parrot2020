<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEmpleado extends FormRequest
{

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
            'cedula' => 'required|digits_between:6,8|unique:empleados,cedula'.$this->route('id'),
            'apellidos' => ['required','max:20','regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ]{2,}([\sa-zA-ZÁÉÍÓÚáéíóúñÑ]{2,})*$/'],
            'nombre' => ['required','max:20', 'regex:/^[a-zA-ZÁÉÍÓÚáéíóúñÑ]{2,}([\sa-zA-ZÁÉÍÓÚáéíóúñÑ]{2,})*$/'],
            'fecha_nacimiento' => ['required','max:10', 'regex:/^(0[1-9]|[12][0-9]|3[01])[-\/.](0[1-9]|1[012])[-\/.](19|20)\d\d$/'],
            'fecha_ingreso' =>  ['required','regex:/^(0[1-9]|[12][0-9]|3[01])[-\/.](0[1-9]|1[012])[-\/.](19|20)\d\d$/'],
            'telefono' =>  'required|digits_between:10,13',
            'direccion' => 'required|max:150',
            'ciudad' =>  'required|max:20',
            'email' =>  'required|max:100|email:rfc,dns',
            'zona_postal' =>  'required|digits_between:4,5'
        ];
    }
}
