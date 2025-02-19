<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyActivityCategory\DeleteCompanyActivityCategoryRequest;
use App\Http\Requests\CompanyActivityCategory\StoreCompanyActivityCategoryRequest;
use App\Repositories\CompanyActivityCategory\CompanyActivityCategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyActivityCategoryController extends Controller
{

    public function __construct(
        private CompanyActivityCategoryRepositoryInterface $companyActivityCategoryRepositoryInterface
    )
    {
    }


    public function store(StoreCompanyActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityCategoryRepositoryInterface->store($request->validated()));
    }

    public function delete(DeleteCompanyActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityCategoryRepositoryInterface->delete($request->validated()));
    }
}
