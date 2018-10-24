<?php

namespace Jackcruden\TelescopeLink\Http\Middleware;

use Jackcruden\TelescopeLink\TelescopeLink;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(TelescopeLink::class)->authorize($request) ? $next($request) : abort(403);
    }
}
