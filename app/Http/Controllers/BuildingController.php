<?php

namespace App\Http\Controllers;

use App\Http\Requests\Building\DeleteBuildingRequest;
use App\Http\Requests\Building\IndexBuildingRequest;
use App\Http\Requests\Building\ShowBuildingRequest;
use App\Http\Requests\Building\StoreBuildingRequest;
use App\Http\Requests\Building\UpdateBuildingRequest;
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

    function index(IndexBuildingRequest $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->index($request->validated()));
    }

    public function show(ShowBuildingRequest $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->show($request->validated()));
    }

    public function store(StoreBuildingRequest $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->store($request->validated()));
    }

    public function update(UpdateBuildingRequest $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->update($request->validated()));
    }

    public function delete(DeleteBuildingRequest $request): JsonResponse
    {
        return response()->json($this->buildingRepositoryInterface->delete($request->validated()));
    }
}
