<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'rut_cliente' => 'required|max:10|min:8|unique:cliente,rut_cliente',
            'nom_cliente' =>  'required|max:20|min:3|',
            'password' => 'required|min:3|max:30',
            'fono' => 'required|min:8|numeric',
            'perfil_id' => 'required',


        ];
        
    }

    public function messages()
    {
        return[
            'rut_cliente.required' => 'Indica tu rut',
            'rut_cliente.max' => 'El rut debe tener maximo 10 carecteres',
            'rut_cliente.min' => 'El rut debe tener minimo 3 caracteres',
            'rut_cliente.unique' => 'Ya existe este rut',
            'nom_cliente.required' => 'Indica tu nombre',
            'nom_cliente.max' => 'El nombre debe tener maximo 20 caracteres',
            'nom_cliente.min' => 'El nombre debe tener minimo 6 caracteres',
            'password.required' => 'Indica la contraseña',
            'password.min' => 'La contraseña debe tener minimo 3 caracteres',
            'password.max' => 'La contraseña debe tener maximo 30 caracteres',
            'fono.required' => 'Indica tu telefono',
            //'fono.max' => 'El telefono tiene que tener maximo 12 numeros',
            'fono.min' => 'El telefono debe tener minimo 8 numeros',
            'fono.numeric' => 'El fono debe ser numerico',
            'perfil_id.required' => 'Indica el perfil', 







            




        ];


    }


    
}

