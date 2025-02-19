<?php

namespace App\Repositories\CompanyActivity;

interface CompanyActivityRepositoryInterface
{

    public function store(array $data);

    public function delete(array $data);
}
