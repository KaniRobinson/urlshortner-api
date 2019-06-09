<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Link')->prefix('links')->group(function() {
    Route::post('/', CreateController::class);
    Route::get('/', ListController::class);
    Route::get('/{link}', ViewController::class);
});

Route::namespace('Visit')->prefix('visits')->group(function() {
    Route::get('/{link}/analytics', AnalyticController::class);
    Route::get('/{link}', ListController::class);
});
