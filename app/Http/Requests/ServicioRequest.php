<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
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
            'precio'=> 'required|numeric|min:5',
            'desc_servicio'=>'required|min:7|max:100',
            'activo'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'precio.required'=>'Debe ingresar el precio',
            'precio.numeric'=>'El precio debe der de tipo numerico',
            'precio.min'=>'El precio debe tener al menos 5 cifras',
            
            'desc_servicio.required'=>'Debe ingresar la descripcion del servicio',
            'desc_servicio.min'=>'La descripcion del servicio debe tener al menos 7 caracteres',
            'desc_servicio.max'=>'La descripcion del servicio debe tener maximo 100 caracteres',
            'activo.required'=>'Debe ingresar si el servicio esta activo o no'



        ];
    }
}
