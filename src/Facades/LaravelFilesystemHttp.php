<?php

namespace Flowan\LaravelFilesystemHttp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flowan\LaravelFilesystemHttp\LaravelFilesystemHttp
 */
class LaravelFilesystemHttp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Flowan\LaravelFilesystemHttp\LaravelFilesystemHttp::class;
    }
}
