<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Post(
 *      path="/company_activity_categories",
 *      summary="Add new Relation between Company and ActivityCategory",
 *      description="",
 *      tags={"CompanyActivityCategories"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"activity_category_id", "company_id"},
 *              @OA\Property(property="activity_category_id", type="integer", description="ID ActivityCategory, must exist"),
 *              @OA\Property(property="company_id", type="integer", description="ID Company, must exist")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/company_activity_categories/{id}",
 *      summary="Delete Relation between Company and ActivityCategory by ID",
 *      description="",
 *      tags={"CompanyActivityCategories"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID CompanyActivityCategories"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class CompanyActivityCategoryAnnotationController
{
    //
}
