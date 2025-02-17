<?php

namespace App\Http\Controllers;

use App\Repositories\ActivityCategory\ActivityCategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ActivityCategoryController extends Controller
{

    public function __construct(
        private ActivityCategoryRepositoryInterface $activityCategoryRepositoryInterface
    )
    {

    }

    public function index(): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->index());
    }

    public function show(): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->show());
    }

    public function store(): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->store());
    }

    public function update(): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->update());
    }

    public function delete(): JsonResponse
    {
        return response()->json($this->activityCategoryRepositoryInterface->delete());
    }
}
