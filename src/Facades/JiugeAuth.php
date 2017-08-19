<?php
namespace JiugeTo\AuthServerLaravel5\Facades;

use Illuminate\Support\Facades\Facade;

class JiugeAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth-server-laravel5.jiugeauth';
    }
}