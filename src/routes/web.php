<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;

Route::get('/keyword',[KeywordController::class, 'memory_keyword']);
Route::get('/keyword/load', [KeywordController::class,'load_memory_keyword']);
Route::delete('/keyword/delete', [KeywordController::class,'delete_memory_keyword']);
Route::post('/keyword/store', [KeywordController::class,'store_memory_keyword']);
