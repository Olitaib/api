<?php

namespace App\Repositories\Company;

use App\Models\Company;
use Illuminate\Support\Collection;

class CompanyEloquentRepository implements CompanyRepositoryInterface
{

    public function index(array $data): Collection
    {
        return Company::query()
            ->get();
    }

    public function show(array $data): Company
    {
        return Company::query()->find($data['id']);
    }

    public function store(array $data): Company
    {
        return Company::query()->create($data);
    }

    public function update(array $data): Company
    {
        $company = Company::query()->find($data['id']);
        $company->update($data);

        return $company;
    }

    public function delete(array $data): true
    {
        return Company::query()->find($data['id'])->delete();
    }
}
