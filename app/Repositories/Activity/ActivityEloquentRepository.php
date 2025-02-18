<?php

namespace App\Repositories\Activity;

use App\Models\Activity;
use Illuminate\Support\Collection;

class ActivityEloquentRepository implements ActivityRepositoryInterface
{

    public function index(array $data): Collection
    {
        return Activity::query()
            ->where('activity_type_id', $data['activity_type_id'])
            ->get();
    }

    public function show(array $data): Activity
    {
        return Activity::query()->find($data['id']);
    }

    public function store(array $data): Activity
    {
        return Activity::query()->create($data);
    }

    public function update(array $data): Activity
    {
        $activity = Activity::query()->find($data['id']);
        $activity->update($data);

        return $activity;
    }

    public function delete(array $data): true
    {
        return Activity::query()->find($data['id'])->delete();
    }
}
