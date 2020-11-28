<?php

namespace App\Services\Provas;

use App\Repositories\Provas\MateriaRepository;
use App\Services\CrudService;

class MateriaService extends CrudService
{
    protected $repositorio = MateriaRepository::class;
}
