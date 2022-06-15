<?php
namespace Yepos\Keyword;


use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;

class Yepos
{
    protected $config;
    protected $request;

    public function __construct(Config $config = null, Request $request = null)
    {
        $this->config = $config;
        $this->request = $request;
    }
    public static function routes()
    {

//        Route::group(['middleware' => ['YeposAdmin']], function () {
            Route::get('/keyword',[KeywordController::class, 'memory_keyword']);
            Route::get('/keyword/load', [KeywordController::class,'load_memory_keyword']);
            Route::delete('/keyword/delete', [KeywordController::class,'delete_memory_keyword']);
            Route::post('/keyword/store', [KeywordController::class,'store_memory_keyword']);
            Route::get('/lang/{lang}', [LanguageController::class,'switchLang']);

//        });
    }

}
