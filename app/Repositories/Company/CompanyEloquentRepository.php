<?php

namespace App\Repositories\Company;

use App\Models\Company;
use App\Traits\Company\FilterCompanyEloquentTrait;
use Illuminate\Support\Collection;

class CompanyEloquentRepository implements CompanyRepositoryInterface
{
    use FilterCompanyEloquentTrait;

    public function index(array $data): Collection
    {
        $query = Company::query()
            ->select('c.id', 'c.name', 'b.address')
            ->from('companies as c')
            ->join('buildings as b', 'b.id', '=', 'c.building_id');

        return $this->filterCompany($query, $data)->get();
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
