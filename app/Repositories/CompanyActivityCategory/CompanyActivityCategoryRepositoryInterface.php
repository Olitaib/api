<?php

namespace App\Repositories\CompanyActivityCategory;

interface CompanyActivityCategoryRepositoryInterface
{

    public function store(array $data);

    public function delete(array $data);
}
