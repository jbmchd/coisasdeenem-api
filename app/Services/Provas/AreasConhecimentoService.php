<?php

namespace App\Services\Provas;

use App\Repositories\Provas\AreasConhecimentoRepository;
use App\Services\CrudService;

class AreasConhecimentoService extends CrudService
{
    protected $repositorio = AreasConhecimentoRepository::class;
    // public function __construct(AreasConhecimentoRepository $repositorio)
    // {
    //     parent::__construct($repositorio);
    // }

}
