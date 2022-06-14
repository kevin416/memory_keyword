<?php
namespace Yepos\Keyword;

use Illuminate\Support\ServiceProvider;

class KeywordServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','keyword');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->mergeConfigFrom(__DIR__ . '/config/keyword.php','keyword');

        $this->publishes([__DIR__ . '/config/keyword.php' => config_path('keyword.php')]);


    }

    public function register(){

    }


}
