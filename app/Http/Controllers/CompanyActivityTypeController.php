<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyActivityType\CompanyActivityTypeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CompanyActivityTypeController extends Controller
{

    public function __construct(
        private CompanyActivityTypeRepositoryInterface $companyActivityTypeRepositoryInterface
    )
    {
    }

    public function store( $request): JsonResponse
    {
        return response()->json($this->companyActivityTypeRepositoryInterface->store($request->validated()));
    }

    public function delete( $request): JsonResponse
    {
        return response()->json($this->companyActivityTypeRepositoryInterface->delete($request->validated()));
    }
}
