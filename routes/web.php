<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;
use Yepos\Keyword\Http\Controllers\LanguageController;

Route::get('/keyword',[KeywordController::class, 'memory_keyword']);

