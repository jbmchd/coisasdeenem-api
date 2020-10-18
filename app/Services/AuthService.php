<?php

namespace App\Services;

use App\Exceptions\AuthException;
use App\Repositories\UsuarioRepository as Repository;
use JbSanctum\Services\AuthService as ServicesAuthService;

class AuthService extends ServicesAuthService
{
    public function __construct(Repository $repositorio)
    {
        parent::__construct($repositorio);
        $this->exception_class = AuthException::class;
    }

}
