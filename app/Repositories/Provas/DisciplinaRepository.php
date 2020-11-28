<?php

namespace App\Repositories\Provas;

use App\Models\Disciplina;
use App\Repositories\CrudRepository;

class DisciplinaRepository extends CrudRepository
{
    protected $model = Disciplina::class;
}
