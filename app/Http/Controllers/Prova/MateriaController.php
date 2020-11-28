<?php

namespace App\Http\Controllers\Prova;

use App\Http\Controllers\CrudController;
use App\Services\Provas\MateriaService;
use App\Http\Requests\Provas\MateriaRequest as Request;

class MateriaController extends CrudController
{
    protected $servico = MateriaService::class;

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
