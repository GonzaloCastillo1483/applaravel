<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //'rut_cliente' => 'required|max:16|min:9|unique:cliente,rut_cliente',
            'nom_cliente' =>  'required|max:20|min:6|',
            'password' => 'required|min:3|max:30',
            'fono' => 'required|max:9|min:8',
        ];

        
    }

    public function messages(){
        return[
            // 'rut_cliente.required' => 'Indica tu rut',
            // 'rut_cliente.max' => 'El rut tiene que tener maximo 16 carecteres',
            // 'rut_cliente.min' => 'El rut tiene que tener minimo 9 caracteres',
            // 'rut_cliente.unique' => 'Ya existe este rut',
            'nom_cliente.required' => 'Indica tu nombre',
            'nom_cliente.max' => 'El nombre tiene que tener maximo 20 caracteres',
            'nom_cliente.min' => 'El nombre tiene que tener minimo 6 caracteres',
            'password.required' => 'Indica la contraseña',
            'password.min' => 'La contraseña tiene que tener minimo 3 caracteres',
            'password.max' => 'La contraseña tiene que tener maximo 30 caracteres',
            'fono.required' => 'Indica tu telefono',
            'fono.max' => 'El telefono tiene que tener maximo 9 numeros',
            'fono.min' => 'El telefono tiene que tener minimo 8 numeros',
        ];
    }
}
