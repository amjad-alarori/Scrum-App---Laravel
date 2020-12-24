<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\DefOfDone;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefOfDoneController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class)->only('index');
        $this->middleware(ProjectAdminAccess::class)->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $teammembers = $project->scrumTeam;
        $def_of_dones = $project->defOfDone;
        return view('dod', ['project'=>$project, 'def_of_dones'=>$def_of_dones, 'teammembers'=>$teammembers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
//        return view('defOfDoneReq' , ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Project $project
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
//        $request->validate([
//            'title' => ['required', 'string'],
//            'description' => ['required', 'string'],
//        ]);

        $defofdone = new defOfDone();
        $defofdone->title = $request->get('title');
        $defofdone->body = $request->get('body');
        $defofdone->projectId = $project->id;

        $defofdone->save();

        return redirect(route('defOfDone.index',['project'=>$project]))->with('successfullyCreated', 'Requirement has been created.');;
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param \App\Models\DefOfDone $defOfDone
     * @return void
     */
    public function show(Project $project, DefOfDone $defOfDone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\DefOfDone $defOfDone
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(DefOfDone $defOfDone, Project $project)
    {
        //return view('updateDefOfDoneReq' , ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param DefOfDone $defOfDone
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Project $project, DefOfDone $defOfDone)
    {
//        dd(request()->all());
        $defOfDone->title = $request->get('title');
        $defOfDone->body = $request->get('body');
        $defOfDone->projectId = $project->id;

        $defOfDone->update();

        return back()->with('successfullyUpdated', 'Requirement has been updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param \App\Models\DefOfDone $defOfDone
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Project $project, DefOfDone $defOfDone)
    {
        $defOfDone->delete($defOfDone->id);
//        return redirect(route('defOfDone.index',['project'=>$project]));
    }
}
