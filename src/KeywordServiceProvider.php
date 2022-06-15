<?php
namespace Yepos\Keyword;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class KeywordServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->loadViewsFrom(__DIR__ . '/views','keyword');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->mergeConfigFrom(__DIR__ . '/config/keyword.php','keyword');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'keyword');

        $this->publishes([
            __DIR__ . '/config/keyword.php' => config_path('keyword.php'),

//            __DIR__ . '/views' => resource_path('views/vendor/keyword')
        ]);

        if (config('keyword.use_package_routes')) {
            Route::group(['middleware' => ['YeposAdmin']], function () {
//                $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
                echo 'hewllo';
                Yepos::routes();
            });
        }


    }

    public function register(){

    }


}
