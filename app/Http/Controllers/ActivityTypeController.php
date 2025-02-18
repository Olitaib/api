<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Repositories\ActivityType\ActivityTypeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityTypeController extends Controller
{

    public function __construct(
        private ActivityTypeRepositoryInterface $activityTypeRepositoryInterface
    )
    {
    }
    public function index(Request $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->index($request->validated()));
    }
    public function show(Request $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->show($request->validated()));
    }
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->store($request->validated()));
    }
    public function update(Request $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->update($request->validated()));
    }
    public function delete(Request $request): JsonResponse
    {
        return response()->json($this->activityTypeRepositoryInterface->delete($request->validated()));
    }
}
