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
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint)
    {
        $ProductBacklogs = ProductBacklog::query()->where('sprint_id', null)->get();
        $sprintBacklogs = ProductBacklog::query()->where('sprint_id', '=', $sprint->id)->get();

       

        return view ('sprintBacklog', ['project'=> $project, 'sprint'=> $sprint, 'ProductBacklogs'=>$ProductBacklogs, 'sprintBacklogs'=>$sprintBacklogs]);


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
    public function show(Project $project, Sprint $sprint, ProductBacklog $sprintBacklog)
    {
        dd("hi");
       // $productBacklog = $sprintBacklog->project;
      //  return view ('addtosprintbacklog', ['project'=> $project, 'sprint'=> $sprint, 'productBacklog'=>$productBacklog]);
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
