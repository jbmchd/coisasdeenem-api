<?php

namespace App\Services\Provas;

use App\Repositories\Provas\ConteudoRepository;
use App\Services\CrudService;

class ConteudoService extends CrudService
{
    protected $repositorio = ConteudoRepository::class;
}
