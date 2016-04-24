<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class questionarioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required',
            'provincia'=>'required',
            'bairro'=>'required',
            'doencas'=>'required',
            'atendimento'=>'required',
            'prioridade'=>'required',
            'tempoEspera'=>'required',
            'suborno'=>'required',
            'utilidade'=>'required',
              
        ];
    }
}
