<?php

namespace App\Models;

use JbGlobal\Models\Model;

class Materia extends Model
{
    protected $fillable = [
        'id', 'disciplina_id', 'nome', 'abreviacao', 'ativo'
    ];

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function conteudos()
    {
        return $this->hasMany(Conteudo::class);
    }
}
