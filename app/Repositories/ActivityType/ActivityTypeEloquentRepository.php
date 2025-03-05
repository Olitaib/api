<?php

namespace App\Repositories\ActivityType;

use App\Models\ActivityType;
use Illuminate\Support\Collection;

class ActivityTypeEloquentRepository implements ActivityTypeRepositoryInterface
{

    public function index(array $data): Collection
    {
        return ActivityType::query()
            ->select('at.id', 'at.name')
            ->from('activity_types as at')
            ->where('at.activity_category_id', $data['activity_category_id'])
            ->when(array_key_exists('company_id', $data), function ($query) use ($data) {
                $query->join('company_activity_types as cat', 'cat.activity_type_id', '=', 'at.id')
                    ->where('cat.company_id', $data['company_id']);
            })
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

    public function delete(array $data): bool
    {
        return ActivityType::query()
            ->where('id', $data['id'])
            ->delete();
    }
}
