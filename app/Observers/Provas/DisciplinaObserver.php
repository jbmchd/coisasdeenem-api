<?php

namespace App\Observers\Provas;

use App\Models\Disciplina;

class DisciplinaObserver
{
    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Disciplina  $model
     * @return void
     */
    public function creating(Disciplina $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }

    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Disciplina  $model
     * @return void
     */
    public function updating(Disciplina $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }
}
