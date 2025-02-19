<?php

namespace App\Repositories\CompanyActivityType;

interface CompanyActivityTypeRepositoryInterface
{

    public function store(array $data);

    public function delete(array $data);
}
