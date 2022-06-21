<?php
namespace Yepos\Keyword;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yepos\Keyword\Http\Controllers\KeywordController;
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

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');


    }

    public function register(){
//        $this->app->alias(KeywordController::class, 'keyword');
    }


}
