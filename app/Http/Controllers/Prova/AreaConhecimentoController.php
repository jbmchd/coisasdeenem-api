<?php

namespace App\Http\Controllers\Prova;

use App\Http\Controllers\CrudController;
use App\Services\Provas\AreaConhecimentoService;
use App\Http\Requests\Provas\AreaConhecimentoRequest as Request;

class AreaConhecimentoController extends CrudController
{
    protected $servico = AreaConhecimentoService::class;

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
