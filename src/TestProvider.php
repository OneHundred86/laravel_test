<?php
namespace Oh86\LaravelTest;

use Illuminate\Support\ServiceProvider;
use \Oh86\LaravelTest\Lib\Test;

class ClassName extends ServiceProvider
{
    public function register()
    {
        /* 
        # 如果需要生成配置文件，可以这样写
        # php artisan vendor:publish --provider="Lock\LockServiceProvider"
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/test.php' => $this->app['path.config'].DIRECTORY_SEPARATOR.'test.php',
            ]);
        }*/

        $this->app->singleton(Test::class, function ($app) {
            $test = new Test;
            $test->setName("test4laravel");
            return $test;
        });
    }
}