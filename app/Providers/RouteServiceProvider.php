<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
// use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use JbGlobal\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            $this->mapApiAuth();
            $this->mapApiUsuario();
            $this->mapApiProvas();
        });

    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }

    protected function mapApiAuth()
    {
        Route::namespace($this->getNamespace())
                ->middleware(['api'])
                ->prefix('api/auth')
                ->group(base_path('routes/api/auth.php'));
    }

    protected function mapApiUsuario()
    {
        Route::namespace($this->getNamespace())
                ->middleware(['api','auth:sanctum'])
                ->prefix('api/usuario')
                ->group(base_path('routes/api/usuario.php'));
    }

    protected function mapApiProvas()
    {
        $namespace = 'Prova';
        $prefix = 'api/provas';
        $base_path = 'routes/api/provas';

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/areas-conhecimento")
                ->group(base_path("$base_path/area_conhecimento.php"));

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/disciplinas")
                ->group(base_path("$base_path/disciplinas.php"));

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/ensinos")
                ->group(base_path("$base_path/ensino.php"));

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/materias")
                ->group(base_path("$base_path/materia.php"));

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/conteudos")
                ->group(base_path("$base_path/conteudo.php"));

        Route::namespace($this->getNamespace($namespace))
                ->middleware(['api','auth:sanctum'])
                ->prefix("$prefix/provas")
                ->group(base_path("$base_path/prova.php"));
    }

}
