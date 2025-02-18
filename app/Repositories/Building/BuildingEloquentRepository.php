<?php

namespace App\Repositories\Building;

use App\Models\Building;
use Illuminate\Support\Collection;

class BuildingEloquentRepository implements BuildingRepositoryInterface
{

    public function index(array $data): Collection
    {
        return Building::query()
            ->get();
    }

    public function show(array $data): Building
    {
        return Building::query()->find($data['id']);
    }

    public function store(array $data): Building
    {
        return Building::query()->create($data);
    }

    public function update(array $data): Building
    {
        $Building = Building::query()->find($data['id']);
        $Building->update($data);

        return $Building;
    }

    public function delete(array $data): true
    {
        return Building::query()->find($data['id'])->delete();
    }
}
