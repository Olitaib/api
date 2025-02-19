<?php

use App\Http\Controllers\ActivityCategoryController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CompanyActivityCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyPhoneController;
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

Route::prefix('activities')->group(function () {
    Route::get('/', [ActivityController::class, 'index']);
    Route::get('/{id}', [ActivityController::class, 'show']);
    Route::post('/', [ActivityController::class, 'store']);
    Route::put('/{id}', [ActivityController::class, 'update']);
    Route::delete('/{id}', [ActivityController::class, 'delete']);
});

Route::prefix('buildings')->group(function () {
    Route::get('/', [BuildingController::class, 'index']);
    Route::get('/{id}', [BuildingController::class, 'show']);
    Route::post('/', [BuildingController::class, 'store']);
    Route::put('/{id}', [BuildingController::class, 'update']);
    Route::delete('/{id}', [BuildingController::class, 'delete']);
});

Route::prefix('companies')->group(function () {
    Route::get('/', [CompanyController::class, 'index']);
    Route::get('/{id}', [CompanyController::class, 'show']);
    Route::post('/', [CompanyController::class, 'store']);
    Route::put('/{id}', [CompanyController::class, 'update']);
    Route::delete('/{id}', [CompanyController::class, 'delete']);
});

Route::prefix('company_phones')->group(function () {
    Route::get('/', [CompanyPhoneController::class, 'index']);
    Route::get('/{id}', [CompanyPhoneController::class, 'show']);
    Route::post('/', [CompanyPhoneController::class, 'store']);
    Route::put('/{id}', [CompanyPhoneController::class, 'update']);
    Route::delete('/{id}', [CompanyPhoneController::class, 'delete']);
});

Route::prefix('company_activity_categories')->group(function () {
    Route::post('/', [CompanyActivityCategoryController::class, 'store']);
    Route::delete('/{id}', [CompanyActivityCategoryController::class, 'delete']);
});
