<?php
namespace Yepos\Keyword;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Yepos\Keyword\Http\Controllers\KeywordController;
class KeywordServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->registerMigration();

//        $this->registerTranslation();

//        $this->registerResources();

        $this->registerRoutes();

//        $this->defineAssetPublishing();

        $this->offerPublishing();

//        $this->registerCommands();

    }

    protected function registerMigration(){
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

//    protected function registerTranslation(){
//        $this->loadTranslationsFrom(__DIR__.'/lang', 'keyword');
//    }

    public function defineAssetPublishing()
    {
        $this->publishes([
            __DIR__ .'/../public' => public_path('vendor/keyword'),
        ], ['keyword-assets', 'laravel-assets']);
    }

    protected function offerPublishing()
    {
        $this->publishes([
            __DIR__ . '/config/keyword.php' => config_path('keyword.php'),

//            __DIR__ . '/views' => resource_path('views/vendor/keyword')
        ]);
    }
    public function register(){
//        $this->app->alias(KeywordController::class, 'keyword');
        $this->configure();
    }

    protected function registerRoutes()
    {

        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });
    }

//    protected function registerResources()
//    {
//        $this->loadViewsFrom(__DIR__ . '/../resources/views','keyword');
//    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => 'api',
//            'middleware' => config('custompackage.middleware'),
        ];
    }

    protected function configure()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/keyword.php','keyword');
    }

//    protected function registerCommands()
//    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                Console\AssetsCommand::class,
//            ]);
//        }
//    }
}
