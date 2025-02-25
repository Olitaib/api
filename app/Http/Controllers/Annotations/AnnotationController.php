<?php

namespace App\Http\Controllers\Annotations;

/**
 * @OA\Info(
 *     title="API",
 *     description="REST API for Companies, Activities and Buildings",
 *     version="1.0.0"
 * ),
 * @OA\Server(
 *     url="http://0.0.0.0:8000/api",
 *     description="local"
 * )
 *
 * @OA\SecurityScheme(
 *      securityScheme="ApiKey",
 *      type="apiKey",
 *      in="header",
 *      name="x-api-key"
 * )
 * @OA\Security(
 *     security={
 *         "ApiKey": {}
 *     }
 * )
 */
class AnnotationController
{
    //
}
