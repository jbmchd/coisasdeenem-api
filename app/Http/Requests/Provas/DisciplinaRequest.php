<?php

namespace App\Http\Requests\Provas;

use App\Http\Requests\Request;
use App\Models\AreaConhecimento;

class DisciplinaRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regras_selecionadas = parent::rules();

        $area_conhecimento_model = AreaConhecimento::class;
        $regras = [
            'area_conhecimento_id' => ['primary_key', "foreign_key:$area_conhecimento_model"],
            'nome' => ['required', 'string', 'min:3', 'max:100'],
            'sigla' => ['nullable', 'string', 'min:1', 'max:10'],
            'ativo' => ['required', 'boolean'],
        ];

        switch ($this->getMetodo()) {
            case 'criar':
                $regras_selecionadas['area_conhecimento_id'] = array_merge($regras['area_conhecimento_id'],['required']);
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['sigla'] = $regras['sigla'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
            break;
            case 'atualizar':
                $regras_selecionadas['area_conhecimento_id'] = $regras['area_conhecimento_id'];
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['sigla'] = $regras['sigla'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
                break;
        }
        return $regras_selecionadas;
    }
}
