<?php

namespace App\Models;

use JbGlobal\Models\Model;

class AreaConhecimento extends Model
{
    public $table = "areas_conhecimento";

    protected $fillable = [
        'id', 'nome', 'sigla', 'ativo'
    ];
}
