<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
    //validacion de que se esten ingresando datos en el formulario
    //verifica que los campos que se estan mandando por el formulario tengan algun conenido
    //si se cumplen las tres reglas de validacion con required seigue el programa
        
    {
        return [
            'name'=> 'required|max:10',
            'description'=> 'required|min:10',
            'categoria'=> 'required'
        ];
    }
    // /si se cumple sigue lo siguiente

    public function attributes()
    {
        return[
            'name'=>'nombre del curso',
        ];
    }

    public function messages()
    {
        return[
            'description.required'=>'Debe ingresar una descripcion del curso',
        ];
    }

}
