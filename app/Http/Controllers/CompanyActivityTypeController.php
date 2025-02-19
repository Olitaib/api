<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyActivityType\DeleteCompanyActivityTypeRequest;
use App\Http\Requests\CompanyActivityType\StoreCompanyActivityTypeRequest;
use App\Repositories\CompanyActivityType\CompanyActivityTypeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyActivityTypeController extends Controller
{

    public function __construct(
        private CompanyActivityTypeRepositoryInterface $companyActivityTypeRepositoryInterface
    )
    {
    }

    public function store(StoreCompanyActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityTypeRepositoryInterface->store($request->validated()));
    }

    public function delete(DeleteCompanyActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->companyActivityTypeRepositoryInterface->delete($request->validated()));
    }
}
