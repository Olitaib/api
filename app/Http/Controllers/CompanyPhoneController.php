<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyPhone\CompanyPhoneRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyPhoneController extends Controller
{

    public function __construct(
        private CompanyPhoneRepositoryInterface $companyPhoneRepositoryInterface
    )
    {
    }
    public function index( $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->index($request->validated()));
    }
    public function show( $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->show($request->validated()));
    }
    public function store( $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->store($request->validated()));
    }
    public function update( $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->update($request->validated()));
    }
    public function delete( $request): JsonResponse
    {
        return response()->json($this->companyPhoneRepositoryInterface->delete($request->validated()));
    }
}
