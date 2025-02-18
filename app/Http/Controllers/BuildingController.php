<?php

namespace App\Http\Controllers;

use App\Repositories\Building\BuildingRepositoryInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Request;

class BuildingController extends Controller
{

    public function __construct(
        private BuildingRepositoryInterface $buildingRepositoryInterface,
    )
    {
    }

    function index(Request $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->index($request->validated()));
    }

    public function show(Request $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->show($request->validated()));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->store($request->validated()));
    }

    public function update(Request $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->update($request->validated()));
    }

    public function delete(Request $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->delete($request->validated()));
    }
}
