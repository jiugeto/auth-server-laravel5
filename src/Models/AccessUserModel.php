<?php
namespace JiugeTo\AuthServerLaravel5\Models;

class AccessUserModel extends Model
{
    /**
     * 用户 token 操作
     */

    protected $table = 'access_user';
    protected $fillable = [
        'id','uid','token','expire','created_at',
    ];
}