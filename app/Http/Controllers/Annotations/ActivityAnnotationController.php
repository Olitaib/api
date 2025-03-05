<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/activities",
 *      summary="Get all Activities",
 *      description="",
 *      tags={"Activities"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="activity_type_id",
 *          required=true,
 *          in="query",
 *          description="ID ActivityType"
 *      ),
 *      @OA\Parameter(name="company_id", required=false, in="query", description="ID Company, must exist"),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/activities/{id}",
 *      summary="Get Activity by ID",
 *      description="",
 *      tags={"Activities"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Activity"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/activities",
 *      summary="Store new Activity",
 *      description="",
 *      tags={"Activities"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"name", "activity_type_id"},
 *              @OA\Property(property="name", type="string", minLength=1, maxLength=255, description="Name of Activity, must be unique"),
 *              @OA\Property(property="activity_type_id", type="integer", description="ID ActivityType")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/activities/{id}",
 *      summary="Update existing Activity",
 *      description="",
 *      tags={"Activities"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Activity"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="name", nullable=false, type="string", minLength=1, maxLength=255, description="Name of Activity, must be unique"),
 *              @OA\Property(property="activity_type_id", nullable=false, type="integer", description="ID ActivityType")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/activities/{id}",
 *      summary="Delete Activity by ID",
 *      description="",
 *      tags={"Activities"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Activity"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class ActivityAnnotationController
{
    //
}
