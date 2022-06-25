<?php
use Illuminate\Support\Facades\Route;

use Yepos\Keyword\Http\Controllers\Api\KeywordController;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('keywords',KeywordController::class);
