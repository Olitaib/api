<?php

namespace App\Http\Controllers;

use App\Repositories\Company\CompanyRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{

    public function __construct(
        private CompanyRepositoryInterface $companyRepositoryInterface
    )
    {

    }

    public function index($request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->index($request->validated()));
    }

    public function show($request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->show($request->validated()));
    }

    public function store($request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->store($request->validated()));
    }

    public function update($request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->update($request->validated()));
    }

    public function delete($request): JsonResponse
    {
        return response()->json($this->companyRepositoryInterface->delete($request->validated()));
    }
}
