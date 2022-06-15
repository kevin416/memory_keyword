<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;

Route::get('/yepos/keyword',[KeywordController::class, 'memory_keyword']);
Route::get('/yepos/keyword/load', [KeywordController::class,'load_memory_keyword']);
Route::delete('/yepos/keyword/delete', [KeywordController::class,'delete_memory_keyword']);
Route::post('/yepos/keyword/store', [KeywordController::class,'store_memory_keyword']);
Route::get('/lang/{lang}', [LanguageController::class,'switchLang']);
