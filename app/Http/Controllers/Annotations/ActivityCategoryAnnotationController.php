<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/activity_categories",
 *      summary="Get all ActivityCategories",
 *      description="",
 *      tags={"ActivityCategories"},
 *      security={
 *          {"ApiKey": {}}
 *      },
 *      @OA\Parameter(name="company_id", required=false, in="query", description="ID Company, must exist"),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/activity_categories/{id}",
 *      summary="Get ActivityCategory by ID",
 *      description="",
 *      tags={"ActivityCategories"},
 *      security={
 *          {"ApiKey": {}}
 *      },
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityCategory, must exist"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/activity_categories",
 *      summary="Store new ActivityCategory",
 *      description="",
 *      tags={"ActivityCategories"},
 *      security={
 *          {"ApiKey": {}}
 *      },
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"name"},
 *              @OA\Property(property="name", nullable=false, type="string", minLength=1, maxLength=255, description="Name of ActivityCategory, must be unique")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/activity_categories/{id}",
 *      summary="Update existing ActivityCategory",
 *      description="",
 *      tags={"ActivityCategories"},
 *      security={
 *          {"ApiKey": {}}
 *      },
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityCategory"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"name"},
 *              @OA\Property(property="name", nullable=false, type="string", minLength=1, maxLength=255, description="Name of ActivityCategory, must be unique")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/activity_categories/{id}",
 *      summary="Delete ActivityCategory by ID",
 *      description="",
 *      tags={"ActivityCategories"},
 *      security={
 *          {"ApiKey": {}}
 *      },
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityCategory, must exist"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class ActivityCategoryAnnotationController
{
    //
}
