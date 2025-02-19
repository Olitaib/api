<?php

namespace App\Repositories\CompanyActivity;

use App\Models\CompanyActivity;

class CompanyActivityEloquentRepository implements CompanyActivityRepositoryInterface
{

    public function store(array $data): CompanyActivity
    {
        return CompanyActivity::query()->create($data);
    }

    public function delete(array $data): true
    {
        return CompanyActivity::query()->find($data['id'])->delete();
    }
}
