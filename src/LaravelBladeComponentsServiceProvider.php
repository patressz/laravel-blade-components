<?php

namespace Patressz\LaravelBladeComponents;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBladeComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blade-components')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted()
    {
        Blade::componentNamespace('Patressz\\LaravelBladeComponents\\Components\\Form', config('blade-components.prefix.form'));
    }
}
