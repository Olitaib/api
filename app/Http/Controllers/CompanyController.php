<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\DeleteCompanyRequest;
use App\Http\Requests\Company\IndexCompanyRequest;
use App\Http\Requests\Company\ShowCompanyRequest;
use App\Http\Requests\Company\StoreCompanyRequest;
use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Repositories\Company\CompanyRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{

    public function __construct(
        private CompanyRepositoryInterface $companyRepositoryInterface
    )
    {

    }

    public function index(IndexCompanyRequest $request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->index($request->validated()));
    }

    public function show(ShowCompanyRequest $request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->show($request->validated()));
    }

    public function store(StoreCompanyRequest $request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->store($request->validated()));
    }

    public function update(UpdateCompanyRequest $request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->update($request->validated()));
    }

    public function delete(DeleteCompanyRequest $request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->delete($request->validated()));
    }
}
