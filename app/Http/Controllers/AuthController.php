<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use JbSanctum\Controllers\AuthController as ControllersAuthController;


class AuthController extends ControllersAuthController
{
    protected $servico = AuthService::class;
    // public function __construct(AuthService $authService)
    // {
    //     parent::__construct($authService);
    // }

}
