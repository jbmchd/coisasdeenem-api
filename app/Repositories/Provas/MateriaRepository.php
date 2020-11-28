<?php

namespace App\Repositories\Provas;

use App\Models\Materia;
use App\Repositories\CrudRepository;

class MateriaRepository extends CrudRepository
{
    protected $model = Materia::class;
}
