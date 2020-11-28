<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CrudController;
use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends CrudController
{
    protected $servico = UsuarioService::class;
    // protected $clientService;

    // public function __construct(UsuarioService $usuarioService)
    // {
    //     parent::__construct($usuarioService);
    // }


    public function criar(Request $request)
    {
        dd('ok top :)');
    }
}
