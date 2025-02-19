<?php

namespace App\Repositories\CompanyActivityType;

use App\Models\CompanyActivityType;

class CompanyActivityTypeEloquentRepository implements CompanyActivityTypeRepositoryInterface
{

    public function store(array $data): CompanyActivityType
    {
        return CompanyActivityType::query()->create($data);
    }

    public function delete(array $data): true
    {
        return CompanyActivityType::query()->find($data['id'])->delete();
    }
}
