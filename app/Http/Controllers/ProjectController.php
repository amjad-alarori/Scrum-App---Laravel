<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\Project;
use App\Models\ScrumRole;
use App\Models\ScrumTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class)->only('show');
        $this->middleware(ProjectAdminAccess::class)->except(['show', 'index', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *

     * @return Project[]|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); //user(zelfverzonnen woord/variable)= de ingelogde user volgens Auth(gemaakt door Laravel)
        $teams = $user->scrumTeams; /*array*/ //teams(verzonnen woord als variable) = de user ophalen uit de databasetabel waar hij maar voorkomt als gebruiker(want een user kan in meerdere scrumteeams zitten) en in een array aanbienden.

        $projects = []; //projects = de user met zijn hele hebben en houden uit de database.
        foreach ($teams as $team):
            $project = $team->project;
            $role = $team->scrumRole;
            array_push($projects, ['project'=>$project, 'role'=> $role]);
        endforeach;

        return view('projects', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'mission' => ['string', 'nullable'],
            'vision' => ['string', 'nullable'],
            'deadline' => ['date', 'after:' . date('m/d/Y')],
            'sprintLength' => ['integer', 'min:1']
        ]);


        $project = new Project();
        $project->title = $request['title'];
        $project->description = isset($request['description']) ? $request['description'] : null;
        $project->mission = isset($request['mission']) ? $request['mission'] : null;
        $project->vision = isset($request['vision']) ? $request['vision'] : null;
        $project->deadline = isset($request['deadline']) ? $request['deadline'] : null;
        $project->deadline = $request['deadline'];
        $project->sprintLength = $request['sprintLength'];

        $project->save();


        /**
         * Add the author of the project as a first team member as ScrumMaster
         * because a project without any team member is not possible.
         * the projects are only visible for the team members of it.
         */
        $scrumTeam = new ScrumTeam();
        $scrumTeam->projectId = $project->id;
        $scrumTeam->userId = Auth::id();
        $scrumTeam->roleId = 2;

        $scrumTeam->save();

        return redirect()->Route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $sprints=$project->sprints;
        $teammembers=$project->scrumTeam;

        return view('projectdashboard',['project'=>$project, 'sprints'=>$sprints, 'teammembers'=>$teammembers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projectForm',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'mission' => ['string', 'nullable'],
            'vision' => ['string', 'nullable'],
            'deadline' => ['date', 'after:' . date('m/d/Y',$project->createdat)],
            'sprintLength' => ['integer', 'min:1']
        ]);

        $project->title = $request['title'];
        $project->description = isset($request['description']) ? $request['description'] : null;
        $project->mission = isset($request['mission']) ? $request['mission'] : null;
        $project->vision = isset($request['vision']) ? $request['vision'] : null;
        $project->deadline = isset($request['deadline']) ? $request['deadline'] : null;
        $project->deadline = $request['deadline'];
        $project->sprintLength = $request['sprintLength'];

        $project->update();

        return redirect()->Route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
