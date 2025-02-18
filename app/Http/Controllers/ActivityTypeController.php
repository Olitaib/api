<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityType\DeleteActivityTypeRequest;
use App\Http\Requests\ActivityType\IndexActivityTypeRequest;
use App\Http\Requests\ActivityType\ShowActivityTypeRequest;
use App\Http\Requests\ActivityType\StoreActivityTypeRequest;
use App\Http\Requests\ActivityType\UpdateActivityTypeRequest;
use App\Repositories\ActivityType\ActivityTypeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityTypeController extends Controller
{

    public function __construct(
        private ActivityTypeRepositoryInterface $activityTypeRepositoryInterface
    )
    {
    }
    public function index(IndexActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->index($request->validated()));
    }
    public function show(ShowActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->show($request->validated()));
    }
    public function store(StoreActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->store($request->validated()));
    }
    public function update(UpdateActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->update($request->validated()));
    }
    public function delete(DeleteActivityTypeRequest $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->delete($request->validated()));
    }
}
