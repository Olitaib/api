<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityCategory\DeleteActivityCategoryRequest;
use App\Http\Requests\ActivityCategory\IndexActivityCategoryRequest;
use App\Http\Requests\ActivityCategory\ShowActivityCategoryRequest;
use App\Http\Requests\ActivityCategory\StoreActivityCategoryRequest;
use App\Http\Requests\ActivityCategory\UpdateActivityCategoryRequest;
use App\Repositories\ActivityCategory\ActivityCategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityCategoryController extends Controller
{

    public function __construct(
        private ActivityCategoryRepositoryInterface $activityCategoryRepositoryInterface
    )
    {

    }

    public function index(IndexActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->index($request->validated()));
    }

    public function show(ShowActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->show($request->validated()));
    }

    public function store(StoreActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->store($request->validated()));
    }

    public function update(UpdateActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->update($request->validated()));
    }

    public function delete(DeleteActivityCategoryRequest $request): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->delete($request->validated()));
    }
}
