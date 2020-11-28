<?php

namespace App\Repositories\Provas;

use App\Models\Ensino;
use App\Repositories\CrudRepository;

class EnsinoRepository extends CrudRepository
{
    protected $model = Ensino::class;
}
