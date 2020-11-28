<?php

namespace App\Repositories\Provas;

use App\Models\AreaConhecimento;
use App\Repositories\CrudRepository;

class AreasConhecimentoRepository extends CrudRepository
{
    protected $model = AreaConhecimento::class;
    // public function __construct(AreaConhecimento $model)
    // {
    //     parent::__construct($model);
    // }
}
