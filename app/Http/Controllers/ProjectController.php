<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Project[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'string'],
            'description'=>['string','nullable'],
            'mission'=>['string','nullable'],
            'vision'=>['string','nullable'],
            'deadline'=>['date','after:'.date('m/d/Y')],
            'sprintLength'=>['integer','min:1']
        ]);

        $project = new Project();
        $project->title = $request['title'];
        $project->description = isset($request['title'])?$request['description']:null;
        $project->mission = isset($request['mission'])?$request['mission']:null;
        $project->vision = isset($request['vision'])?$request['vision']:null;
        $project->deadline = isset($request['deadline'])?$request['deadline']:null;
        $project->deadline = $request['deadline'];
        $project->sprintLength = $request['sprintLength'];

        $project->save();
        return redirect()->Route('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
