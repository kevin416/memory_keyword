<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;

Route::get(config('keyword.nav_home_prefix').'/keyword',[KeywordController::class, 'memory_keyword']);
Route::get(config('keyword.nav_home_prefix').'/keyword/load', [KeywordController::class,'load_memory_keyword']);
Route::delete(config('keyword.nav_home_prefix').'/keyword/delete', [KeywordController::class,'delete_memory_keyword']);
Route::post(config('keyword.nav_home_prefix').'/keyword/store', [KeywordController::class,'store_memory_keyword']);
Route::get(config('keyword.nav_home_prefix').'/lang/{lang}', [LanguageController::class,'switchLang']);
