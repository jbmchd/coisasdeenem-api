<?php

namespace App\Services;

use App\Repositories\UsuarioRepository as Repository;
use JbGlobal\Services\CrudService;

class UsuarioService extends CrudService
{
    protected $repositorio = Repository::class;
    // public function __construct(Repository $repositorio)
    // {
    //     parent::__construct($repositorio);
    // }

}
