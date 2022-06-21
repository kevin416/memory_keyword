<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;

Route::get('/keyword',[KeywordController::class, 'memory_keyword']);
Route::get('/keyword/load', [KeywordController::class,'load_memory_keyword']);
Route::delete('/keyword/destory', [KeywordController::class,'delete_memory_keyword']);
Route::post('/keyword/store', [KeywordController::class,'store_memory_keyword']);
Route::get('/lang/{lang}', [LanguageController::class,'switchLang']);
