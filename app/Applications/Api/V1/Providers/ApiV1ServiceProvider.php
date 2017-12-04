<?php

namespace App\Applications\Api\V1\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class ApiV1ServiceProvider extends RouteServiceProvider
{
    /**
     * Override default laravel API controller namespace.
     *
     * @var string
     */
    public $namespace = 'App\Applications\Api\V1\Http\Controllers';

    /**
     * Boot the service provider.
     *
     */
    public function map()
    {
        Route::prefix('api/v1')
            ->namespace($this->namespace)
            ->group(base_path('app/Applications/Api/V1/Http/routes.php'));
    }
}
