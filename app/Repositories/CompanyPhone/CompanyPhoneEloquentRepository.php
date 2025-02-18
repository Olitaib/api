<?php

namespace App\Repositories\CompanyPhone;

use App\Models\CompanyPhone;
use Illuminate\Support\Collection;

class CompanyPhoneEloquentRepository implements CompanyPhoneRepositoryInterface
{

    public function index(array $data): Collection
    {
        return CompanyPhone::query()
            ->where('company_id', $data['company_id'])
            ->get();
    }

    public function show(array $data): CompanyPhone
    {
        return CompanyPhone::query()->find($data['id']);
    }

    public function store(array $data): CompanyPhone
    {
        return CompanyPhone::query()->create($data);
    }

    public function update(array $data): CompanyPhone
    {
        $companyPhone = CompanyPhone::query()->find($data['id']);
        $companyPhone->update($data);

        return $companyPhone;
    }

    public function delete(array $data): true
    {
        return CompanyPhone::query()->find($data['id'])->delete();
    }
}
