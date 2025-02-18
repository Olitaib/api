<?php

use App\Http\Controllers\ActivityCategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('activity_categories')->group(function () {
    Route::get('/', [ActivityCategoryController::class, 'index']);
    Route::get('/{id}', [ActivityCategoryController::class, 'show']);
    Route::post('/', [ActivityCategoryController::class, 'store']);
    Route::put('/{id}', [ActivityCategoryController::class, 'update']);
    Route::delete('/{id}', [ActivityCategoryController::class, 'delete']);
});
