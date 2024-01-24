<?php

namespace Flowan\LaravelFilesystemApi;

use Flowan\LaravelFilesystemApi\Commands\LaravelFilesystemApiCommand;
use Flowan\LaravelFilesystemApi\Filesystem\ApiAdapter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
//            ->hasViews()
//            ->hasMigration('create_laravel-filesystem-api_table')
//            ->hasCommand(LaravelFilesystemApiCommand::class);
    }

    public function packageBooted(): void
    {
        Storage::extend('api', function (Application $app, array $config) {
            $adapter = new ApiAdapter($config);

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
