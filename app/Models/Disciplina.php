<?php

namespace App\Models;

use JbGlobal\Models\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'id', 'area_conhecimento_id', 'nome', 'sigla', 'ativo',
    ];

    public function area_conhecimento()
    {
        return $this->belongsTo(AreaConhecimento::class);
    }

    public function ensinos()
    {
        return $this->belongsToMany(Ensino::class,'ensinos_x_disciplinas');
    }

    public function provas()
    {
        return $this->belongsToMany(Prova::class,'provas_x_disciplinas');
    }

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }
}
