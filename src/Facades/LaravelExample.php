<?php

namespace Skies\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Skies\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
