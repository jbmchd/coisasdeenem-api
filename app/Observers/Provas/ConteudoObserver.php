<?php

namespace App\Observers\Provas;

use App\Models\Conteudo;

class ConteudoObserver
{
    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Conteudo  $model
     * @return void
     */
    public function creating(Conteudo $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }

    /**
     * Handle the model "creating" event.
     *
     * @param  \App\Models\Conteudo  $model
     * @return void
     */
    public function updating(Conteudo $model)
    {
        $model->ativo = $model->ativo ?? 0;
    }
}
