<?php

namespace App\Http\Controllers;

use App\Models\DefOfDone;
use App\Models\Project;
use Illuminate\Http\Request;

class DefOfDoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $cards = DefOfDone::query()->where('ProjectId', '=', $project->id);

        return view('dod', ['cards'=>$cards, 'project'=>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('defOfDoneReq', ['project'=>$project]);
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
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $defofdone = new DefOfDone;
        $defofdone->title = $request->get('title');
        $defofdone->body = $request->get('body');
        $defofdone->projectId = $project->id;

        $defofdone->save();

        return redirect('dod');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DefOfDone  $defOfDone
     * @return \Illuminate\Http\Response
     */
    public function show(DefOfDone $defOfDone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DefOfDone  $defOfDone
     * @return \Illuminate\Http\Response
     */
    public function edit(DefOfDone $defOfDone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DefOfDone  $defOfDone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DefOfDone $defOfDone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param  \App\Models\DefOfDone  $defOfDone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, DefOfDone $defOfDone)
    {
        $defOfDone->delete();
        return redirect()->back();
    }
}
