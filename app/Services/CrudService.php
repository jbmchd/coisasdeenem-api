<?php

namespace App\Services;

use App\Services\Service;
use JbGlobal\Repositories\Repository;

abstract class CrudService extends Service
{
    protected $repositorio;

    public function __construct(Repository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

}
