<?php

namespace App\Http\Middleware;

use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = Auth::id();
        $project = $request->route('project');

        if (gettype($project) == "string"):
            $project = Project::query()->find($project);

            if ($project === null):
                return redirect()->back()->with('NoAccess', 'Page not founded');
            endif;
        endif;

        $count = $project->scrumTeam()->where('userId', $userId)->count();

        if ($count > 0):
            return $next($request);
        endif;
        return redirect()->back()->with('NoAccess', 'Access denied for that page');
    }
}
