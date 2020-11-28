<?php

namespace App\Http\Controllers\Prova;

use App\Http\Controllers\CrudController;
use App\Services\Provas\EnsinoService;
use App\Http\Requests\Provas\EnsinoRequest as Request;

class EnsinoController extends CrudController
{
    protected $servico = EnsinoService::class;

    public function criar(Request $request)
    {
        return parent::_criar($request);
    }

    public function atualizar(Request $request, $id)
    {
        return parent::_atualizar($request, $id);
    }

    public function deletar($id)
    {
        return parent::_deletar($id);
    }
}
