<?php

namespace App\Providers;

use App\Repositories\ActivityCategory\ActivityCategoryEloquentRepository;
use App\Repositories\ActivityCategory\ActivityCategoryRepositoryInterface;
use App\Repositories\ActivityType\ActivityTypeEloquentRepository;
use App\Repositories\ActivityType\ActivityTypeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ActivityCategoryRepositoryInterface::class, ActivityCategoryEloquentRepository::class);
        $this->app->bind(ActivityTypeRepositoryInterface::class, ActivityTypeEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
