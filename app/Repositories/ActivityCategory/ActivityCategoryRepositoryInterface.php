<?php

namespace App\Repositories\ActivityCategory;

interface ActivityCategoryRepositoryInterface
{

    function index();

    public function show();

    public function store();

    public function update();

    public function delete();
}
