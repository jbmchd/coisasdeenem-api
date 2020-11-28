<?php

namespace App\Services\Provas;

use App\Repositories\Provas\AreaConhecimentoRepository;
use App\Services\CrudService;

class AreaConhecimentoService extends CrudService
{
    protected $repositorio = AreaConhecimentoRepository::class;
}
