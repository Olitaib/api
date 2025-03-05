<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/activity_types",
 *      summary="Get all ActivityTypes",
 *      description="",
 *      tags={"ActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="activity_category_id",
 *          required=true,
 *          in="query",
 *          description="ID ActivityCategory"
 *      ),
 *      @OA\Parameter(name="company_id", required=false, in="query", description="ID Company, must exist"),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/activity_types/{id}",
 *      summary="Get ActivityType by ID",
 *      description="",
 *      tags={"ActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityType"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/activity_types",
 *      summary="Store new ActivityType",
 *      description="",
 *      tags={"ActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"name", "activity_category_id"},
 *              @OA\Property(property="name", type="string", minLength=1, maxLength=255, description="Name of ActivityType, must be unique"),
 *              @OA\Property(property="activity_category_id", type="integer", description="ID ActivityCategory")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/activity_types/{id}",
 *      summary="Update existing ActivityType",
 *      description="",
 *      tags={"ActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityType"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="name", nullable=false, type="string", minLength=1, maxLength=255, description="Name of ActivityType, must be unique"),
 *              @OA\Property(property="activity_category_id", nullable=false, type="integer", description="ID ActivityCategory")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/activity_types/{id}",
 *      summary="Delete ActivityType by ID",
 *      description="",
 *      tags={"ActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID ActivityType"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class ActivityTypeAnnotationController
{
    //
}
