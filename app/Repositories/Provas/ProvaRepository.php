<?php

namespace App\Repositories\Provas;

use App\Models\Prova;
use App\Repositories\CrudRepository;
use Illuminate\Support\Facades\DB;

class ProvaRepository extends CrudRepository
{
    protected $model = Prova::class;
}
