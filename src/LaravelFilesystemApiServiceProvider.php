<?php

namespace Flowan\LaravelFilesystemApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Flowan\LaravelFilesystemApi\Commands\LaravelFilesystemApiCommand;

class LaravelFilesystemApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-filesystem-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-filesystem-api_table')
            ->hasCommand(LaravelFilesystemApiCommand::class);
    }
}
