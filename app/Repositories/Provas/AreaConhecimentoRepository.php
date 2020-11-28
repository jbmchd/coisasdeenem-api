<?php

namespace App\Repositories\Provas;

use App\Models\AreaConhecimento;
use App\Repositories\CrudRepository;

class AreaConhecimentoRepository extends CrudRepository
{
    protected $model = AreaConhecimento::class;
}
