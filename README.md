#auth-server-laravel5

# [auth-server-laravel5](https://github.com/jiugeto/auth-server-laravel5) for Laravel 5.4.*

# 默认当前数据库的 access_user 表
- 在MySQL命令行：
```sql
use database database_name;
source 项目的绝对路径/vendor/jiugeto/auth-server-laravel5/src/DataBases/access_user.sql;
```

## 方法一：Composer安装
- 在composer.json的require中加上一行：`"jiugeto/auth-server-laravel5" : "dev-master"`
- 然后在项目中，命令行执行：`composer update`
## 方法二：手动下载安装
- 假如默认更新的不是最新代码，则会出错；那么，直接下载包，解压后，放在下面vendor/jiugeto/下面

## 使用方式
- 在控制器，引入文件：
- `use Illuminate\Http\Request;`
- `use JiugeTo\AuthServerLaravel5\Facades\JiugeAuth;`
- 可以调用方法，生成access_token令牌：`JiugeAuth::getTokenByUid($request->uid);`
- 可以调用方法，由access_token令牌获取用户ID：`JiugeAuth::getUidByToken($request->token);`