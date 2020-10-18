<?php

namespace App\Services;

use App\Repositories\UsuarioRepository as Repository;
use JbGlobal\Services\CrudService;

class UsuarioService extends CrudService
{

    public function __construct(Repository $repositorio)
    {
        parent::__construct($repositorio);
    }

}
