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
     * @param Project $project
     * @param Sprint $sprint
     * @param ProductBacklog $productBacklog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Project $project, Sprint $sprint)
    {

        $productBackLog = ProductBacklog::query()->where('sprint_id', '=',  null)->get();
        //$sprintBacklog = ProductBacklog::query()->where('sprint_id', '=', $sprint->id)->get();

        return view ('addtosprintbacklog', ['project'=> $project, 'sprint'=> $sprint, 'productBackLog'=>$productBackLog]);

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
     * @param ProductBacklog $productBacklog
     * @return void
     */
    public function update(Request $request, ProductBacklog $productBackLog)
    {

        $productBackLog->sprint_id = $request['sprint_id'];

        $productBackLog->update();



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
