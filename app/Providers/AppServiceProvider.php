<?php

namespace App\Providers;

use App\Repositories\Activity\ActivityEloquentRepository;
use App\Repositories\Activity\ActivityRepositoryInterface;
use App\Repositories\ActivityCategory\ActivityCategoryEloquentRepository;
use App\Repositories\ActivityCategory\ActivityCategoryRepositoryInterface;
use App\Repositories\ActivityType\ActivityTypeEloquentRepository;
use App\Repositories\ActivityType\ActivityTypeRepositoryInterface;
use App\Repositories\Building\BuildingEloquentRepository;
use App\Repositories\Building\BuildingRepositoryInterface;
use App\Repositories\Company\CompanyEloquentRepository;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\CompanyActivityCategory\CompanyActivityCategoryEloquentRepository;
use App\Repositories\CompanyActivityCategory\CompanyActivityCategoryRepositoryInterface;
use App\Repositories\CompanyActivityType\CompanyActivityTypeEloquentRepository;
use App\Repositories\CompanyActivityType\CompanyActivityTypeRepositoryInterface;
use App\Repositories\CompanyPhone\CompanyPhoneEloquentRepository;
use App\Repositories\CompanyPhone\CompanyPhoneRepositoryInterface;
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
        $this->app->bind(BuildingRepositoryInterface::class, BuildingEloquentRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyEloquentRepository::class);
        $this->app->bind(CompanyPhoneRepositoryInterface::class, CompanyPhoneEloquentRepository::class);
        $this->app->bind(CompanyActivityCategoryRepositoryInterface::class, CompanyActivityCategoryEloquentRepository::class);
        $this->app->bind(CompanyActivityTypeRepositoryInterface::class, CompanyActivityTypeEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
