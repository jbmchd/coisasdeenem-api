<?php

namespace App\Providers;

use App\Models\AreaConhecimento;
use App\Observers\Provas\AreasConhecimentoObserver;
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
        AreaConhecimento::observe(AreasConhecimentoObserver::class);
    }
}
