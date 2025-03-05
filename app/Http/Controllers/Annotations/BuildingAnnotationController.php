<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/buildings",
 *      summary="Get all Buildings",
 *      description="",
 *      tags={"Buildings"},
 *      security={{"ApiKey": {}}},
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/buildings/{id}",
 *      summary="Get Building by ID",
 *      description="",
 *      tags={"Buildings"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Building"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/buildings",
 *      summary="Store new Building",
 *      description="",
 *      tags={"Buildings"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"address", "latitude", "longitude"},
 *              @OA\Property(property="address", type="string", minLength=1, maxLength=255, description="Address"),
 *              @OA\Property(property="latitude", type="number", description="Latitude of address, float", example=55.7522),
 *              @OA\Property(property="longitude", type="number", description="Longitude of address, float", example=37.6156)
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/buildings/{id}",
 *      summary="Update existing Building",
 *      description="",
 *      tags={"Buildings"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Building"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          description="required at least one",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="address", type="string", minLength=1, maxLength=255, description="Address"),
 *              @OA\Property(property="latitude", type="number", description="Latitude of address, float", example=55.7522),
 *              @OA\Property(property="longitude", type="number", description="Longitude of address, float", example=37.6156)
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/buildings/{id}",
 *      summary="Delete Building by ID",
 *      description="",
 *      tags={"Buildings"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID Building"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class BuildingAnnotationController
{
    //
}
