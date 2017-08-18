<?php
namespace Jiuge\AuthServerLaravel5\Controllers;

use Jiuge\AuthServerLaravel5\Models\AccessUserModel;
use Jiuge\AuthServerLaravel5\Models\Model;

class AccessUserController extends Controller
{
    /**
     * 用户 token 操作
     */

    protected static $expire = 7200;//有效期2小时


    /**
     * 生成记录，返回 token
     */
    public static function insert()
    {
        $uid = isset($_REQUEST['uid']) ? $_REQUEST['uid'] : 0;
        if (!$uid) { return '数据错误！'; }
        $token = Model::getRanddom(20);
        AccessUserModel::create(array(
            'uid' => $uid,
            'token' => $token,
            'expire' => time() + self::$expire,
            'created_at' => time(),
        ));
        return $token;
    }

    /**
     * 根据 token 获取用户ID
     */
    public function getUidByToken()
    {
        $token = isset($_REQUEST['token']) ? $_REQUEST['token'] : '';
        if (!$token) { return 'token已经失效，或者不存在！'; }
        $user = AccessUserModel::where('token',$token)
            ->where('expire','<',time())
            ->first();
        if (!$user) { return 'token已经过期！'; }
        return $user->uid;
    }
}