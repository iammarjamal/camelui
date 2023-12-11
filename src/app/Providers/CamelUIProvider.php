<?php

namespace CamelUI;

use Illuminate\Foundation\{AliasLoader, Application};
use Illuminate\Support;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use CamelUI\Facades\CamelUI;
use CamelUI\Providers\{BladeDirectives, CustomMacros};
use CamelUI\Support\ComponentResolver;
use CamelUI\View\Compilers\CamelUITagCompiler;

/**
 * @property Application $app
 */
class CamelUIProvider extends Support\ServiceProvider
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

        Blade::componentNamespace('CamelUI\\resources\\views\\Components', 'CamelUI');
    }
}