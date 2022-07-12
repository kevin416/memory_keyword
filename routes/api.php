<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Yepos\Keyword\Http\Controllers\Api\KeywordController;
use Yepos\Keyword\Http\Controllers\Api\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::apiResource('keywords', KeywordController::class);
    Route::apiResource('tasks', TaskController::class);

});
