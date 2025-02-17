<?php

namespace App\Repositories\ActivityCategory;

use App\Models\ActivityCategory;
use Illuminate\Support\Collection;

class ActivityCategoryEloquentRepository implements ActivityCategoryRepositoryInterface
{

    public function index(array $data): Collection
    {
        return ActivityCategory::all();
    }

    public function show(array $data): ActivityCategory
    {
        return ActivityCategory::query()->find($data['id']);
    }

    public function store(array $data): ActivityCategory
    {
        return ActivityCategory::query()->create($data);
    }

    public function update(array $data): ActivityCategory
    {
        $activityCategory = ActivityCategory::query()->find($data['id']);
        $activityCategory->update($data);

        return $activityCategory;
    }

    public function delete(array $data): true
    {
        return ActivityCategory::query()->find($data['id'])->delete();
    }
}
