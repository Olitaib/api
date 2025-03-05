<?php

namespace App\Repositories\ActivityCategory;

use App\Models\ActivityCategory;
use Illuminate\Support\Collection;

class ActivityCategoryEloquentRepository implements ActivityCategoryRepositoryInterface
{

    public function index(array $data): Collection
    {
        return ActivityCategory::query()
            ->select('ac.id', 'ac.name')
            ->from('activity_categories as ac')
            ->when(array_key_exists('company_id', $data), function ($query) use ($data) {
                $query->join('company_activity_categories as cac', 'cac.activity_category_id', '=', 'ac.id')
                    ->where('cac.company_id', $data['company_id']);
            })
            ->get();
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

    public function delete(array $data): bool
    {
        return ActivityCategory::query()
            ->where('id', $data['id'])
            ->delete();
    }
}
