<?php

namespace App\Http\Middleware;

use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsAdminDelete
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

            $userId = Auth::id();

            $project = $request->route('project');

            $count = $project->scrumTeam()->where('userId','=', $userId)->whereIn('roleId',[1,2])->count();

            if ($count > 0):
                return $next($request);
            endif;



        $review = $request->route('review');

            if ($review->user_id == $userId){

                return $next($request);
            }
            else {
                return redirect()->back()->with("NoAccess", "Can't Delete this");
            }

    }
}
