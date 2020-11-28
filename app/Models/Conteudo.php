<?php

namespace App\Models;

use JbGlobal\Models\Model;

class Conteudo extends Model
{
    protected $fillable = [
        'id', 'materia_id', 'nome', 'abreviacao', 'ativo'
    ];

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
