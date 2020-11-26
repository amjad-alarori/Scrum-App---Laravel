<?php

namespace App\Http\Controllers;

use App\Models\Sprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Project;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\New_;

class SprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project)
    {
        $sprints=DB::table('sprints')->where('project_id', $project->id);

        return view ('projectdashboard', ['sprints'=>$sprints]);
        

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
        $request->validate([
            'title'=>['required', 'string'],
            'description'=>['string', 'nullable'],
            'startdate'=>['required', 'date', 'after:' .date('m/d/Y')],
            'enddate'=>['required', 'date','after:' .date('m/d/Y')],
            'projectId'=>['required', 'integer'],
            ]);

        $sprint= New Sprint();

        $sprint->title= isset($request['title'])?$request['title']:null;
        $sprint->description= isset($request['description'])?$request['description']:null;
        $sprint->startdate= $request['startdate'];
        $sprint->enddate= $request['enddate'];
        $sprint->project_id= $request['projectId'];

        $sprint->save();

        return redirect()->route('projectdashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function show(Sprint $sprint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function edit(Sprint $sprint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sprint $sprint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sprint $sprint)
    {
        //
    }
}
