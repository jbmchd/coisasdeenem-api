<?php

namespace App\Services\Provas;

use App\Repositories\Provas\DisciplinaRepository;
use App\Services\CrudService;

class DisciplinaService extends CrudService
{
    protected $repositorio = DisciplinaRepository::class;
}
