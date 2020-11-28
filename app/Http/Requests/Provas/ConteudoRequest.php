<?php

namespace App\Http\Requests\Provas;

use App\Http\Requests\Request;
use App\Models\Materia;

class ConteudoRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regras_selecionadas = parent::rules();

        $materia_model = Materia::class;
        $regras = [
            'materia_id' => ['primary_key', "foreign_key:$materia_model"],
            'nome' => ['required', 'string', 'min:3', 'max:100'],
            'abreviacao' => ['nullable', 'string', 'min:1', 'max:50'],
            'ativo' => ['required', 'boolean'],
        ];

        switch ($this->getMetodo()) {
            case 'criar':
                $regras_selecionadas['materia_id'] = array_merge($regras['materia_id'],['required']);
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['abreviacao'] = $regras['abreviacao'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
            break;
            case 'atualizar':
                $regras_selecionadas['materia_id'] = $regras['materia_id'];
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['abreviacao'] = $regras['abreviacao'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
                break;
        }
        return $regras_selecionadas;
    }
}
