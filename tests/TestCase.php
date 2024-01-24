<?php

namespace Flowan\LaravelFilesystemHttp\Tests;

use Flowan\LaravelFilesystemHttp\LaravelFilesystemHttpServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Flowan\\LaravelFilesystemHttp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelFilesystemHttpServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-filesystem-http_table.php.stub';
        $migration->up();
        */
    }
}
