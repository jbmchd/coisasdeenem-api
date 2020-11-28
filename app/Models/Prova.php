<?php

namespace App\Models;

use JbGlobal\Models\Model;

class Prova extends Model
{
    protected $fillable = [
        'id', 'ensino_id', 'nome', 'abreviacao', 'ativo'
    ];

    public function ensino()
    {
        return $this->belongsTo(Ensino::class);
    }

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class,'provas_x_disciplinas');
    }
}
