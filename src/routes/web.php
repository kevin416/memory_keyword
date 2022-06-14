<?php
use Illuminate\Support\Facades\Route;
use Yepos\Keyword\Http\Controllers\KeywordController;

Route::get('keyword',[KeywordController::class, 'index']);
