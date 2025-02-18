<?php

namespace App\Repositories\ActivityType;

use App\Models\ActivityType;
use Illuminate\Support\Collection;

class ActivityTypeEloquentRepository implements ActivityTypeRepositoryInterface
{

    public function index(array $data): Collection
    {
        return ActivityType::query()
            ->where('activity_category_id', $data['activity_category_id'])
            ->get();
    }

    public function show(array $data): ActivityType
    {
        return ActivityType::query()->find($data['id']);
    }

    public function store(array $data): ActivityType
    {
        return ActivityType::query()->create($data);
    }

    public function update(array $data): ActivityType
    {
        $activityType = ActivityType::query()->find($data['id']);
        $activityType->update($data);

        return $activityType;
    }

    public function delete(array $data): true
    {
        return ActivityType::query()->find($data['id'])->delete();
    }
}
