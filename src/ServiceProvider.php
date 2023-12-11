<?php

namespace iammarjamal\camelui;

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
            __DIR__.'/config/CamelUI.php' => config_path('CamelUI.php'),
        ], 'camelui.setup');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/CamelUI'),
        ], 'camelui.setup');

        $this->loadViewsFrom(__DIR__.'/views/components', 'camelui');
    }
}