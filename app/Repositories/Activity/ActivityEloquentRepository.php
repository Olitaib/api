<?php

namespace App\Repositories\Activity;

use App\Models\Activity;
use Illuminate\Support\Collection;

class ActivityEloquentRepository implements ActivityRepositoryInterface
{

    public function index(array $data): Collection
    {
        return Activity::query()
            ->select('a.id', 'a.name')
            ->from('activities as a')
            ->where('activity_type_id', $data['activity_type_id'])
            ->when(array_key_exists('company_id', $data), function ($query) use ($data) {
                $query->join('company_activities as ca', 'ca.activity_id', '=', 'a.id')
                    ->where('ca.company_id', $data['company_id']);
            })
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

    public function delete(array $data): bool
    {
        return Activity::query()
            ->where('id', $data['id'])
            ->delete();
    }
}
