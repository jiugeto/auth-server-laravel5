<?php
namespace JiugeTo\AuthServerLaravel5\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    /**
     * 基础 Model
     */

    public $timestamps = false;

    /**
     * random()函数返回随机整数
     * 默认token 40位字母组合
     */
    public static function getRanddom($length=40, $isNumber=0) {
        if($isNumber) {
            //纯数字
            $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
        } else {
            //数字、字母组合
            $hash = '';
            $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
            $max = strlen($chars) - 1;
            for($i = 0; $i < $length; $i++) {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }
}