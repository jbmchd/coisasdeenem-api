<?php

namespace App\Observers\Provas;

use App\Models\Prova;

class ProvaObserver
{
    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Prova  $model
     * @return void
     */
    public function creating(Prova $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }

    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Prova  $model
     * @return void
     */
    public function updating(Prova $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }
}
