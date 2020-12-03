<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectAdminAccess
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
        $project = $request->route('project');
        $userId = Auth::id();

        $count = $project->scrumTeam()->where('userId', $userId)->where('roleId',1)->orwhere('roleId',2)->count();

        if ($count>0):
            return $next($request);
        endif;
        return redirect()->back()->with('NoAccess', 'Access denied for that page');

    }
}
