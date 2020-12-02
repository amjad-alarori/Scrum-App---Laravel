<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProjectAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd($request->route('project')->id, $request->route('project'));
        return $next($request);
    }
}
