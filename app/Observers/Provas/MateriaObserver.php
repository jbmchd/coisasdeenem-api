<?php

namespace App\Observers\Provas;

use App\Models\Materia;

class MateriaObserver
{
    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Materia  $model
     * @return void
     */
    public function creating(Materia $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }

    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Materia  $model
     * @return void
     */
    public function updating(Materia $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }
}
