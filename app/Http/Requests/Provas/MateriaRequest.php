<?php

namespace App\Http\Requests\Provas;

use App\Http\Requests\Request;
use App\Models\Disciplina;

class MateriaRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regras_selecionadas = parent::rules();

        $disciplina_model = Disciplina::class;
        $regras = [
            'disciplina_id' => ['primary_key', "foreign_key:$disciplina_model"],
            'nome' => ['required', 'string', 'min:3', 'max:100'],
            'abreviacao' => ['nullable', 'string', 'min:1', 'max:50'],
            'ativo' => ['required', 'boolean'],
        ];

        switch ($this->getMetodo()) {
            case 'criar':
                $regras_selecionadas['disciplina_id'] = array_merge($regras['disciplina_id'],['required']);
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['abreviacao'] = $regras['abreviacao'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
            break;
            case 'atualizar':
                $regras_selecionadas['disciplina_id'] = $regras['disciplina_id'];
                $regras_selecionadas['nome'] = $regras['nome'];
                $regras_selecionadas['abreviacao'] = $regras['abreviacao'];
                $regras_selecionadas['ativo'] = $regras['ativo'];
                break;
        }
        return $regras_selecionadas;
    }
}
