<?php

namespace Flowan\LaravelFilesystemApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flowan\LaravelFilesystemApi\LaravelFilesystemApi
 */
class LaravelFilesystemApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Flowan\LaravelFilesystemApi\LaravelFilesystemApi::class;
    }
}
