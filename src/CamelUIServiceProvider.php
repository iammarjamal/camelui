<?php

namespace CamelUI\CamelUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

use CamelUI\CamelUI\Components\Modal\Modal;

class CamelUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('camelui')
            ->hasConfigFile()
            ->hasViews();
    }
}
