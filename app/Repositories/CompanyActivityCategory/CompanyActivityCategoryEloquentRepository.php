<?php

namespace App\Repositories\CompanyActivityCategory;

use App\Models\CompanyActivityCategory;

class CompanyActivityCategoryEloquentRepository implements CompanyActivityCategoryRepositoryInterface
{

    public function store(array $data): CompanyActivityCategory
    {
        return CompanyActivityCategory::query()->create($data);
    }

    public function delete(array $data): true
    {
        return CompanyActivityCategory::query()->find($data['id'])->delete();
    }
}
