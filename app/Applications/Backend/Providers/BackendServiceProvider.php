<?php

namespace App\Applications\Backend\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class BackendServiceProvider extends RouteServiceProvider
{
    /**
     * Define the Backend Application namespace.
     *
     * @var string
     */
    public $namespace = 'App\Applications\Dashboard\Http\Controllers';

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        parent::boot();

        $this->loadViewsFrom(app_path('Applications/Backend/resources/views/'), 'backend');
        $this->loadTranslationsFrom(app_path('Applications/Backend/resources/locale/'), 'backend');
    }

    /**
     * Map routes.
     */
    public function map()
    {
        Route::prefix('app')
            ->namespace($this->namespace)
            ->middleware('web')
            ->group(base_path('app/Applications/Backend/Http/routes.php'));
    }
}