<?php

namespace App\Providers;

use App\Repositories\Activity\ActivityEloquentRepository;
use App\Repositories\Activity\ActivityRepositoryInterface;
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
        $this->app->bind(ActivityRepositoryInterface::class, ActivityEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
