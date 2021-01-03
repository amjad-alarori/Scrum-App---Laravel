<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Http\Request;

class SprintBacklogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint)
    {
        $sprintBacklog = ProductBacklog::query()->where('sprint_id', '=', $sprint->id)->get();
      //  $productBackLog = ProductBacklog::query()->where('sprint_id', '=',  null)->get();

        return view ('sprintBacklog', ['project'=> $project, 'sprint'=> $sprint , 'sprintBacklog'=>$sprintBacklog]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Project $project, Sprint $sprint)
    {
        $productBackLog = ProductBacklog::query()->where('sprint_id', '=',  null)->get();

        //$sprintBacklog = ProductBacklog::query()->where('sprint_id', '=', $sprint->id)->get();

        return view ('addtosprintbacklog', ['project'=> $project, 'sprint'=> $sprint, 'productBackLog'=>$productBackLog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ProductBacklog $sprintBacklog
     * @return void
     */
    public function show(ProductBacklog $sprintBacklog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $sprintBacklog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Project $project, Sprint $sprint, ProductBacklog $sprintBacklog)
    {
        $sprintBacklog->sprint_id = $sprint->id;
        $sprintBacklog->update();

        return back()->with('successfullyAdded', 'Item has been added to sprintbacklog.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request,Project $project, Sprint $sprint, ProductBacklog $sprintBacklog)
    {
        $sprintBacklog->sprint_id = null;
        $sprintBacklog->update();

        return back()->with('successfullyRemoved', 'Item has been removed from sprintbacklog.');
    }
}
