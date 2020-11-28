<?php

namespace App\Repositories;

use App\Models\Usuario as Model;
use JbSanctum\Repositories\UsuarioRepository as RepositoriesUsuarioRepository;

class UsuarioRepository extends RepositoriesUsuarioRepository
{
    protected $model = Model::class;
    // public function __construct(Model $model)
    // {
    //     parent::__construct($model);
    // }
}
