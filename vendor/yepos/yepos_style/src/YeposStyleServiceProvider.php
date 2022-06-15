<?php
namespace Yepos\YeposStyle;

use Illuminate\Support\ServiceProvider;

class YeposStyleServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->loadViewsFrom(__DIR__ . '/views','yepos_style');
        $this->mergeConfigFrom(__DIR__ . '/config/yepos_style.php','yepos_style');

        $this->publishes([
            __DIR__ . '/config/yepos_style.php' => config_path('yepos_style.php'),

        ]);


    }

    public function register(){

    }


}
