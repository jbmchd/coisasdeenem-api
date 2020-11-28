<?php

namespace App\Http\Requests\Provas;

use App\Http\Requests\Request;

class EnsinoRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regras_selecionadas = parent::rules();

        $regras = [
            'nome' => ['required', 'string', 'min:3', 'max:100'],
            'sigla' => ['nullable', 'string', 'min:1', 'max:10'],
        ];

        switch ($this->getMetodo()) {
            case 'criar':
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['sigla'] = $regras['sigla'];
            break;
            case 'atualizar':
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['sigla'] = $regras['sigla'];
                break;
        }
        return $regras_selecionadas;
    }
}
