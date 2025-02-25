<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('x-api-key') === config('app.api_key')) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }
}
