<?php

namespace Stack\Nova\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stack\Nova\Tools\Tool;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return app(Tool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}