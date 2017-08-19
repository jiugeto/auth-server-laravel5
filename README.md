#auth-server-laravel5

# [auth-server-laravel5](https://coding.net/u/946493655/p/auth-server-laravel5/) for Laravel 5.*

# 默认当前数据库的 access_user 表
- 在MySQL命令行：
- `use database database_name;`
- `source 项目的绝对路径/vendor/jiuge/auth-server-laravel5/src/DataBases/access_user.sql;`

## Installation
- 在composer.json的require中加上一行：`"jiugeto/auth-server-laravel5" : "1.0.*@dev"`
- 然后在项目中，命令行执行：`composer update`

## 使用方式
- 在控制器，引入文件：
- `use Illuminate\Http\Request;`
- `use JiugeTo\AuthServerLaravel5\Facades\JiugeAuth;`
- 可以调用方法，生成access_token令牌：`JiugeAuth::getTokenByUid($request->uid);`
- 可以调用方法，由access_token令牌获取用户ID：`JiugeAuth::getUidByToken($request->token);`