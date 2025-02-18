<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Repositories\Activity\ActivityRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityController extends Controller
{

    public function __construct(
        private ActivityRepositoryInterface $activityRepositoryInterface
    )
    {
    }

    function index(Request $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->index($request->validated()));
    }

    public function show(Request $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->show($request->validated()));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->store($request->validated()));
    }

    public function update(Request $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->update($request->validated()));
    }

    public function delete(Request $request): JsonResponse
    {
        return response()->json($this->activityRepositoryInterface->delete($request->validated()));
    }
}
