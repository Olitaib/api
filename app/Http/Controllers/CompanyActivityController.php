<?php

namespace App\Http\Controllers;


use App\Http\Requests\CompanyActivity\DeleteCompanyActivityRequest;
use App\Http\Requests\CompanyActivity\StoreCompanyActivityRequest;
use App\Repositories\CompanyActivity\CompanyActivityRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyActivityController extends Controller
{


    public function __construct(
        private CompanyActivityRepositoryInterface $companyActivityRepositoryInterface
    )
    {
    }

    public function store(StoreCompanyActivityRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityRepositoryInterface->store($request->validated()));
    }

    public function delete(DeleteCompanyActivityRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityRepositoryInterface->delete($request->validated()));
    }
}
