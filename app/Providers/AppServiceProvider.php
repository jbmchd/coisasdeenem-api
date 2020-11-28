<?php

namespace App\Providers;

use App\Models\AreaConhecimento;
use App\Models\Conteudo;
use App\Models\Disciplina;
use App\Models\Ensino;
use App\Models\Materia;
use App\Models\Prova;
use App\Observers\Provas\AreaConhecimentoObserver;
use App\Observers\Provas\ConteudoObserver;
use App\Observers\Provas\DisciplinaObserver;
use App\Observers\Provas\EnsinoObserver;
use App\Observers\Provas\MateriaObserver;
use App\Observers\Provas\ProvaObserver;
use JbSanctum\Providers\AppServiceProvider as ProvidersAppServiceProvider;

class AppServiceProvider extends ProvidersAppServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        AreaConhecimento::observe(AreaConhecimentoObserver::class);
        Disciplina::observe(DisciplinaObserver::class);
        Ensino::observe(EnsinoObserver::class);
        Materia::observe(MateriaObserver::class);
        Conteudo::observe(ConteudoObserver::class);
        Prova::observe(ProvaObserver::class);
    }
}
