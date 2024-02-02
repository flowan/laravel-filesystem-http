<?php

namespace Flowan\LaravelFilesystemHttp;

use Flowan\LaravelFilesystemHttp\Filesystem\HttpAdapter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelFilesystemHttpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-filesystem-http');
    }

    public function packageBooted(): void
    {
        Storage::extend('http', function (Application $app, array $config) {
            $adapter = new HttpAdapter($config);

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });

        Storage::macro('bucket', function (string $bucket) {
            /** @var FilesystemAdapter $this * */
            /** @var HttpAdapter $adapter * */
            $adapter = $this->getAdapter();

            $adapter->setBucket($bucket);

            return $this;
        });
    }
}
