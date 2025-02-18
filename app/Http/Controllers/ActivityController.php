<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity\DeleteActivityRequest;
use App\Http\Requests\Activity\IndexActivityRequest;
use App\Http\Requests\Activity\ShowActivityRequest;
use App\Http\Requests\Activity\StoreActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;
use App\Repositories\Activity\ActivityRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityController extends Controller
{

    public function __construct(
        private ActivityRepositoryInterface $activityRepositoryInterface
    )
    {
    }

    function index(IndexActivityRequest $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->index($request->validated()));
    }

    public function show(ShowActivityRequest $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->show($request->validated()));
    }

    public function store(StoreActivityRequest $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->store($request->validated()));
    }

    public function update(UpdateActivityRequest $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->update($request->validated()));
    }

    public function delete(DeleteActivityRequest $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->delete($request->validated()));
    }
}
