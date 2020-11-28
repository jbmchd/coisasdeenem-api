<?php

namespace App\Services\Provas;

use App\Repositories\Provas\EnsinoRepository;
use App\Services\CrudService;

class EnsinoService extends CrudService
{
    protected $repositorio = EnsinoRepository::class;

    public function criar(array $dados)
    {
        return parent::criarNM($dados, 'disciplinas_ids', 'disciplinas');
    }

    public function atualizar(array $dados, $id)
    {
        return parent::atualizarNM($dados, $id, 'disciplinas_ids', 'disciplinas');
    }

    public function deletar($id)
    {
        return parent::deletarNM($id, 'disciplinas');
    }
}
