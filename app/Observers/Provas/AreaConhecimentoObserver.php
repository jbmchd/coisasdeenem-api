<?php

namespace App\Observers\Provas;

use App\Models\AreaConhecimento;

class AreaConhecimentoObserver
{
    /**
     * Handle the area_conhecimento "creating" event.
     *
     * @param  \App\Models\AreaConhecimento  $area_conhecimento
     * @return void
     */
    public function creating(AreaConhecimento $area_conhecimento)
    {
        $area_conhecimento->ativo = $area_conhecimento->ativo ?? 0;
    }

    /**
     * Handle the area_conhecimento "creating" event.
     *
     * @param  \App\Models\AreaConhecimento  $area_conhecimento
     * @return void
     */
    public function updating(AreaConhecimento $area_conhecimento)
    {
        $area_conhecimento->ativo = $area_conhecimento->ativo ?? 0;
    }
}
