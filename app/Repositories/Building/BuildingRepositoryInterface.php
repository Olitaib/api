<?php

namespace App\Repositories\Building;

interface BuildingRepositoryInterface
{

    function index(array $data);

    public function show(array $data);

    public function store(array $data);

    public function update(array $data);

    public function delete(array $data);
}
