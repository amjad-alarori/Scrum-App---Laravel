<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\New_;

class SprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return void
     */
    public function index(Project $project)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('addsprint', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'startdate' => ['required', 'date', 'after:' . date('m/d/Y')],
//            'enddate'=>['required', 'date','after:' .date('m/d/Y')],
//            'projectId'=>['required', 'integer'],
        ]);

        $sprint = new Sprint();

        $sprint->title = isset($request['title']) ? $request['title'] : null;
        $sprint->description = isset($request['description']) ? $request['description'] : null;
        $sprint->startdate = $request['startdate'];
        $sprint->enddate = date('Y-m-d', strtotime($request['startdate'] . " + " . $project->sprintLength . " days"));
        $sprint->project_id = $project->id;

        $sprint->save();

        return redirect(route('project.show', ['project' => $sprint->project_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param \App\Models\Sprint $sprint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function show(Project $project, Sprint $sprint)
    {
        return view ('sprintDashboard', ['sprint' =>$sprint, 'project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param \App\Models\Sprint $sprint
     * @return void
     */
    public function edit(Project $project, Sprint $sprint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param \App\Models\Sprint $sprint
     * @return void
     */
    public function update(Request $request, Project $project, Sprint $sprint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param \App\Models\Sprint $sprint
     * @return void
     */
    public function destroy(Project $project, Sprint $sprint)
    {
        //


    }
}
