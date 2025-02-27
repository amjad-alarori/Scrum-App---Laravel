<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\Project;
use App\Models\ScrumRole;
use App\Models\ScrumTeam;
use App\Models\User;
use App\Rules\ScrumRoleStore;
use App\Rules\TeamMemberNotExists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScrumTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class)->only('index');
        $this->middleware(ProjectAdminAccess::class)->except('index', 'searchuser');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $team = $project->scrumTeam;
        $fullPermission = false;


        $members = [];
        foreach ($team as $member):

            array_push($members, ['user' => $member->user, 'scrumRole' => $member->scrumRole, 'teamMember' => $member]);

            if (Auth::id() == $member->user->id && ($member->scrumRole->id == 1 || $member->scrumRole->id == 2)):
                $fullPermission = true;
            endif;
        endforeach;

        $scrumRoles = ScrumRole::all();

        return view('scrumTeam', [
            'members' => $members,
            'scrumRoles' => $scrumRoles,
            'project' => $project,
            'fullPermission' => $fullPermission
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'user' => ['required', 'exists:users,email', new TeamMemberNotExists($project->id)],
            'role' => ['required', new ScrumRoleStore($project->id)],
        ]);

        $team = new ScrumTeam();

        $user = User::query()->where('email', '=', $request['user'])->first();

        $team->fill([
            'userId' => $user->id,
            'projectId' => $project->id,
            'roleId' => $request['role'],
        ]);

        $team->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return void
     */
    public function show(Project $project, ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return void
     */
    public function edit(Project $project, ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return void
     */
    public function update(Request $request,Project $project, ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Project $project, ScrumTeam $scrumTeam)
    {
        $membersCount = ScrumTeam::query()->where('projectId', '=', $scrumTeam->projectId)->count();

        if ($membersCount > 1):
            if ($scrumTeam->roleId === 3):
                $scrumTeam->delete();
            else:
                $complementaryRole = $scrumTeam->roleId == 1 ? 2 : 1;

                $membersCount = ScrumTeam::query()->where('projectId', '=', $scrumTeam->projectId)
                    ->where('roleId', '=', $complementaryRole)
                    ->count();


                if ($membersCount === 0):
                    return back()->with('destroyMember', 'Every project must include at least one team member with role \'Product Owner\' or \'Scrum Master\'.');
                else:
                    $scrumTeam->delete();
                endif;
            endif;
        else:
            return back()->with('destroyMember', 'Every project must include at least one team member!');
        endif;

        return back();
    }

    public function searchuser(Request $request)
    {
        if (strlen($_POST['user']) === 0):
            $response['status'] = null;
            $response['message'] = null;
            $response['user'] = null;
            return json_encode($response);
        endif;

        $response = [];
        try {
            $user = User::query()->where('name', 'LIKE', '%' . $_POST['user'] . '%')
                ->orWhere('email', 'LIKE', '%' . $_POST['user'] . '%')->get();
        } catch (\Exception $e) {
            $user = false;
        }

        if ($user === false || count($user) === 0):
            $response['status'] = false;
            $response['message'] = 'user not found!';
            $response['user'] = null;
        elseif (count($user) > 1):
            $response['status'] = false;
            $response['message'] = 'more than one user found';
            $response['user'] = null;
        elseif (count($user) === 1):
            $response['status'] = true;
            $response['message'] = '';
            $response['email'] = $user[0]->email;
        endif;

        return json_encode($response);
    }
}
