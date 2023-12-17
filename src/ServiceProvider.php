<?php

namespace iammarjamal\camelui;

use App\View\Components\Button;
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
        $this->mergeConfigFrom(
            __DIR__."/config/camelui.php", 'camelui'
        );

        $this->loadViewsFrom(__DIR__."/../views/components", 'camelui');

    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/camelui.php' => config_path('camelui.php'),
        ], 'camelui.setup');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/camelui'),
        ], 'camelui.setup');

        $this->loadViewsFrom(__DIR__."/../views/components", 'camelui');
    }
}