<?php

namespace App\Http\Controllers;

use JbSanctum\Controllers\AuthController as ControllersAuthController;
use JbSanctum\Services\AuthService;

class AuthController extends ControllersAuthController
{
    public function __construct(AuthService $authService)
    {
        parent::__construct($authService);
    }

}
