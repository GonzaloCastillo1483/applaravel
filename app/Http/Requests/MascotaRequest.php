<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaRequest extends FormRequest
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
            'nom_mascota' => 'required|max:50|min:1',
            'raza' =>  'required|max:50|min:1',
            'edad' => 'required|min:1|max:2',
        ];
    }
    public function messages()
    {
        return[
            'nom_mascota.required' => 'Debe el nombre de su mascota',
            'nom_mascota.max' => 'El nombre debe que tener maximo 50 carecteres',
            'nom_mascota.min' => 'El nombre debe que tener minimo 1 caracter',
            'raza.required' => 'Debe colocar la raza de su mascota',
            'raza.max' => 'La raza debe que tener maximo 50 caracteres',
            'raza.min' => 'La raza debe que tener minimo 1 caracter',
            'edad.required' => 'Indique la edad de su mascota',
            'edad.min' => 'La edad debe que tener minimo 1 caracter',
            'edad.max' => 'La edad debe que tener maximo 2 caracteres',
        ];
    }
}
