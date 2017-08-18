#auth-server-laravel5

# [auth-server-laravel5](https://coding.net/u/946493655/p/auth-server-laravel5/) for Laravel 5.*


## Installation
- 默认当前数据库的 access_user 表
- Run `composer require jiuge/auth-server-laravel5`


- Add `Jiuge\AuthServerLaravel5\AuthServiceProvider::class,` to  **providers** in *config/app.php*
- Add `'JiugeAuth' => Jiuge\AuthServerLaravel5\AuthServiceProvider::class,` to **aliases** in *config/app.php*
- Run `php artisan vendor:publish`