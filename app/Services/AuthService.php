<?php

namespace App\Services;

use App\Exceptions\AuthException;
use App\Repositories\UsuarioRepository as Repository;
use JbSanctum\Services\AuthService as ServicesAuthService;

class AuthService extends ServicesAuthService
{
    protected $repositorio = Repository::class;
    protected $exception_class = AuthException::class;

    // public function __construct(Repository $repositorio)
    // {
    //     parent::__construct($repositorio);
    //     $this->exception_class = AuthException::class;
    // }

}
