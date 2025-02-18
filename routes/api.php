<?php

use App\Http\Controllers\ActivityCategoryController;
use App\Http\Controllers\ActivityTypeController;
use Illuminate\Support\Facades\Route;


Route::prefix('activity_categories')->group(function () {
    Route::get('/', [ActivityCategoryController::class, 'index']);
    Route::get('/{id}', [ActivityCategoryController::class, 'show']);
    Route::post('/', [ActivityCategoryController::class, 'store']);
    Route::put('/{id}', [ActivityCategoryController::class, 'update']);
    Route::delete('/{id}', [ActivityCategoryController::class, 'delete']);
});

Route::prefix('activity_types')->group(function () {
    Route::get('/', [ActivityTypeController::class, 'index']);
    Route::get('/{id}', [ActivityTypeController::class, 'show']);
    Route::post('/', [ActivityTypeController::class, 'store']);
    Route::put('/{id}', [ActivityTypeController::class, 'update']);
    Route::delete('/{id}', [ActivityTypeController::class, 'delete']);
});
