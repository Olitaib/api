<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Post(
 *      path="/company_activity_types",
 *      summary="Add new Relation between Company and ActivityType",
 *      description="",
 *      tags={"CompanyActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"activity_type_id", "company_id"},
 *              @OA\Property(property="activity_type_id", type="integer", description="ID ActivityType, must exist & must unique with company_id"),
 *              @OA\Property(property="company_id", type="integer", description="ID Company, must exist & Company must have relation with parental ActivityCategory")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/company_activity_types/{id}",
 *      summary="Delete Relation between Company and ActivityType by ID",
 *      description="",
 *      tags={"CompanyActivityTypes"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID CompanyActivityTypes"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class CompanyActivityTypeAnnotationController
{
    //
}
