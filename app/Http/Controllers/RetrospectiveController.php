<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Retrospective;
use App\Models\Sprint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RetrospectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint, User $user)
    {
        $retrospective= Retrospective::query()->where('sprint_id','=', $sprint->id);

        return view ('retrospective', ['project'=> $project, 'sprint'=> $sprint, 'user'=> $user, 'retrospective'=>$retrospective]);




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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, Project $project, Sprint $sprint)
    {
        $request->validate([
            'text' => ['required', 'string'],
            'category' => ['required', 'integer'],

        ]);

        $user=Auth::user();

        $retrospective = new Retrospective();

        $retrospective->text = ($request['text']);
        $retrospective->category = $request['category'];
        $retrospective->project_id = $project->id;
        $retrospective->sprint_id = $sprint->id;
        $retrospective->user_id= $user->id;

        $retrospective->save();

        return redirect(route('retrospective.index', ['project'=>$project->id, 'sprint'=> $sprint->id]
       ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Retrospective  $retrospective
     * @return \Illuminate\Http\Response
     */
    public function show(Retrospective $retrospective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Retrospective  $retrospective
     * @return \Illuminate\Http\Response
     */
    public function edit(Retrospective $retrospective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Retrospective  $retrospective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retrospective $retrospective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Retrospective  $retrospective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retrospective $retrospective)
    {
        //
    }
}
