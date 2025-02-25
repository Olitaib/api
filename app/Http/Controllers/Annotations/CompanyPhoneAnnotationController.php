<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Get(
 *      path="/company_phones",
 *      summary="Get all CompanyPhones",
 *      description="",
 *      tags={"CompanyPhones"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="company_id",
 *          required=true,
 *          in="query",
 *          description="ID Company"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Get(
 *      path="/company_phones/{id}",
 *      summary="Get CompanyPhone by ID",
 *      description="",
 *      tags={"CompanyPhones"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID CompanyPhone"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Post(
 *      path="/company_phones",
 *      summary="Store new CompanyPhone",
 *      description="",
 *      tags={"CompanyPhones"},
 *      security={{"ApiKey": {}}},
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              type="object",
 *              required={"country_code", "area_code", "phone_number", "company_id"},
 *              @OA\Property(property="country_code", type="integer", description="Country Code, must be unique with area_code & phone_number"),
 *              @OA\Property(property="area_code", type="integer", description="Area Code, must be unique with country_code & phone_number"),
 *              @OA\Property(property="phone_number", type="integer", description="Phone Number, must be unique with country_code & area_code"),
 *              @OA\Property(property="company_id", type="integer", description="ID Company, must exist")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Put(
 *      path="/company_phones/{id}",
 *      summary="Update existing CompanyPhone",
 *      description="",
 *      tags={"CompanyPhones"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID CompanyPhone"
 *      ),
 *      @OA\RequestBody(
 *          required=true,
 *          description="required at least one",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(property="country_code", type="integer", description="Country Code, must be unique with area_code & phone_number"),
 *              @OA\Property(property="area_code", type="integer", description="Area Code, must be unique with country_code & phone_number"),
 *              @OA\Property(property="phone_number", type="integer", description="Phone Number, must be unique with country_code & area_code"),
 *              @OA\Property(property="company_id", type="integer", description="ID Company, must exist")
 *          )
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 *
 * @OA\Delete(
 *      path="/company_phones/{id}",
 *      summary="Delete CompanyPhone by ID",
 *      description="",
 *      tags={"CompanyPhones"},
 *      security={{"ApiKey": {}}},
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="path",
 *          description="ID CompanyPhone"
 *      ),
 *      @OA\Response(response=200, description="Success"),
 *      @OA\Response(response=422, description="Failed Validation"),
 *      @OA\Response(response=403, description="Forbidden, wrong or empty ApiKey")
 * )
 */
class CompanyPhoneAnnotationController
{
    //
}
