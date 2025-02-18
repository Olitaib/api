<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyPhone\DeleteCompanyPhoneRequest;
use App\Http\Requests\CompanyPhone\IndexCompanyPhoneRequest;
use App\Http\Requests\CompanyPhone\ShowCompanyPhoneRequest;
use App\Http\Requests\CompanyPhone\StoreCompanyPhoneRequest;
use App\Http\Requests\CompanyPhone\UpdateCompanyPhoneRequest;
use App\Repositories\CompanyPhone\CompanyPhoneRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyPhoneController extends Controller
{

    public function __construct(
        private CompanyPhoneRepositoryInterface $companyPhoneRepositoryInterface
    )
    {
    }
    public function index(IndexCompanyPhoneRequest $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->index($request->validated()));
    }
    public function show(ShowCompanyPhoneRequest $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->show($request->validated()));
    }
    public function store(StoreCompanyPhoneRequest $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->store($request->validated()));
    }
    public function update(UpdateCompanyPhoneRequest $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->update($request->validated()));
    }
    public function delete(DeleteCompanyPhoneRequest $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->delete($request->validated()));
    }
}
