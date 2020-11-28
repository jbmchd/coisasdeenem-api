<?php

namespace App\Repositories\Provas;

use App\Models\Conteudo;
use App\Repositories\CrudRepository;

class ConteudoRepository extends CrudRepository
{
    protected $model = Conteudo::class;
}
