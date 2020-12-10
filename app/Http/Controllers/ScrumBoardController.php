<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Http\Request;

class ScrumBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint)
    {

        $sprintBacklogsToDo= ProductBacklog::query()->where('status', '=', null)->where('sprint_id', '=', $sprint->id)->get();
        $sprintBacklogsInProgress= ProductBacklog::query()->where('status', '=', 1)->where('sprint_id', '=', $sprint->id)->get();
        $sprintBacklogsDone= ProductBacklog::query()->where('status', '=', 2)->where('sprint_id', '=', $sprint->id)->get();

        return view('scrumBoard', ['project'=> $project, 'sprint'=> $sprint, 'sprintBacklogsToDo'=>$sprintBacklogsToDo, 'sprintBacklogsInProgress'=>$sprintBacklogsInProgress, 'sprintBacklogsDone'=>$sprintBacklogsDone]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
