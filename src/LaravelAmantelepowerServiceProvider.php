<?php

namespace Sawirricardo\LaravelAmantelepower;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sawirricardo\LaravelAmantelepower\Commands\LaravelAmantelepowerCommand;

class LaravelAmantelepowerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-amantelepower')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $this->app->singleton(LaravelAmantelepower::class, function ($app) {
            return new LaravelAmantelepower($app['config']->get('amantelepower'));
        });
    }
}
