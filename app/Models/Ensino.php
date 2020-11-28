<?php

namespace App\Models;

use JbGlobal\Models\Model;

class Ensino extends Model
{
    protected $fillable = [
        'id', 'nome', 'sigla', 'ativo'
    ];

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class,'ensinos_x_disciplinas');
    }

    public function provas()
    {
        return $this->hasMany(Prova::class);
    }
}
