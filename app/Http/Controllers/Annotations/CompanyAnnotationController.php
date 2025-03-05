<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/companies",
 *      summary="Get all Companies",
 *      description="",
 *      tags={"Companies"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(name="name", required=false, in="query", description="Name of Company"),
 *      @OA\Parameter(name="address", required=false, in="query", description="Address of Building"),
 *      @OA\Parameter(name="building_id", required=false, in="query", description="ID Building, must exist"),
 *      @OA\Parameter(name="activity_category_id", required=false, in="query", description="ID ActivityCategory, must exist"),
 *      @OA\Parameter(name="activity_type_id", required=false, in="query", description="ID ActivityType, must exist"),
 *      @OA\Parameter(name="activity_id", required=false, in="query", description="ID Activity, must exist"),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/companies/{id}",
 *      summary="Get Company by ID",
 *      description="",
 *      tags={"Companies"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Company"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/companies",
 *      summary="Store new Company",
 *      description="",
 *      tags={"Companies"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"name", "building_id"},
 *              @OA\Property(property="name", type="string", minLength=1, maxLength=255, description="Name of Company, must be unique"),
 *              @OA\Property(property="building_id", type="integer", description="ID Building")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/companies/{id}",
 *      summary="Update existing Company",
 *      description="",
 *      tags={"Companies"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Company"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          description="required at least one",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="name", type="string", minLength=1, maxLength=255, description="Name of Company"),
 *              @OA\Property(property="building_id", type="integer", description="ID Building")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/companies/{id}",
 *      summary="Delete Company by ID",
 *      description="",
 *      tags={"Companies"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Company"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class CompanyAnnotationController
{
    //
}
