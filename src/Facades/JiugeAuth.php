<?php
namespace JiugeTo\AuthServerLaravel5\Facades;

use Illuminate\Support\Facades\Facade;
use JiugeTo\AuthServerLaravel5\Controllers\AccessUserController as AccessUser;

class JiugeAuth extends Facade
{
//    /**
//     * Get the registered name of the component.
//     *
//     * @return string
//     */
//    protected static function getFacadeAccessor()
//    {
//        return 'auth-server-laravel5.jiugeauth';
//    }

    /**
     * 生成 token
     */
    public static function getTokenByUid($uid)
    {
        return AccessUser::insert($uid);
    }

    /**
     * 验证 token
     */
    public static function getUidByToken($token)
    {
        return AccessUser::getUidByToken($token);
    }
}