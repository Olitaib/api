<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Post(
 *      path="/company_activities",
 *      summary="Add new Relation between Company and Activity",
 *      description="",
 *      tags={"CompanyActivities"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"activity_id", "company_id"},
 *              @OA\Property(property="activity_id", type="integer", description="ID Activity, must exist & must unique with company_id"),
 *              @OA\Property(property="company_id", type="integer", description="ID Company, must exist & Company must have relation with parental ActivityType")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/company_activities/{id}",
 *      summary="Delete Relation between Company and Activity by ID",
 *      description="",
 *      tags={"CompanyActivities"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Activities"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class CompanyActivityAnnotationController
{
    //
}
