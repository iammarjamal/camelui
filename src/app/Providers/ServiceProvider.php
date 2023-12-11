<?php

namespace ServiceProvider;

use Illuminate\Foundation\Application;
use Illuminate\Support;
use Illuminate\Support\Facades\Blade;

/**
 * @property Application $app
*/

class ServiceProvider extends Support\ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/CamelUI.php' => config_path('CamelUI.php'),
        ]);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/CamelUI'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'CamelUI');

        Blade::componentNamespace('CamelUI\\resources\\views\\components', 'CamelUI');
    }
}