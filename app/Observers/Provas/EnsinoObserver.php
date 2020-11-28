<?php

namespace App\Observers\Provas;

use App\Models\Ensino;

class EnsinoObserver
{
    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Ensino  $model
     * @return void
     */
    public function creating(Ensino $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }

    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Ensino  $model
     * @return void
     */
    public function updating(Ensino $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }
}
