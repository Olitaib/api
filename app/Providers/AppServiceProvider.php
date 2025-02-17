<?php

namespace App\Providers;

use App\Repositories\ActivityCategory\ActivityCategoryEloquentRepository;
use App\Repositories\ActivityCategory\ActivityCategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ActivityCategoryRepositoryInterface::class, ActivityCategoryEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
