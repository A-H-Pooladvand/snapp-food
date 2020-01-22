<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Call\CallController;
use App\Http\Controllers\Call\Respond\RespondController;

Route::get('/', [MainController::class, 'index']);

Route::group(['prefix' => 'calls', 'as' => 'call.'], static function () {
    Route::group(['prefix' => 'responds', 'as' => 'respond.'], static function () {
        Route::get('{call_id}', [RespondController::class, 'store'])->name('store');
    });

    Route::post('/', [CallController::class, 'store'])->name('store');
});
