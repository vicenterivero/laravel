<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DirectorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //SI ES FALSE NOS VA A RECHAZAR
        // autorizar con tru en vez de return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //paso dos validaciones,baile permite verificar que almenos una de las reglas se cumplan, requiered es para obligar que se escriba si o si, alpha es solo para texto, email para correo electronico
        return [
            'nombre'=>'bail|required|between:3,30|alpha',
            'apellidos'=>'bail|required|between:3,30|alpha',
            'email'=>'bail|required|between:3,30|email',
            'asunto'=>'bail|required|between:0,30|alpha',
            'archivo'=>'required|image'

        ];
    }
}
