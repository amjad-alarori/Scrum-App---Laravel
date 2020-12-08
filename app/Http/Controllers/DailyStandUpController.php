<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Http\Request;
use App\Models\ScrumTeam;
use App\Models\User;
use App\Models\DailyStandUp;
use Illuminate\Support\Facades\Auth;

class DailyStandUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint, User $user)
    {
        $dailyStandUp = DailyStandUp::query()->where('sprint_id','=', $sprint->id);
        return view ('dailyStandUp', ['project'=> $project, 'sprint'=> $sprint, 'user'=> $user, 'dailyStandUp'=> $dailyStandUp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Sprint $sprint)
    {
        return view('dailyStandUpForm', ['sprint'=>$sprint, 'project'=>$project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project, Sprint $sprint)
    {
        $request->validate([
            'yesterday'=>['required', 'string'],
            'today'=>['required', 'string'],
            'challenge'=>['required', 'string']
        ]);

        $user = Auth::user();

        $dailyStandUp = new DailyStandUp();

        $dailyStandUp->yesterday = $request['yesterday'];
        $dailyStandUp->today = $request['today'];
        $dailyStandUp->challenge = $request['challenge'];
        $dailyStandUp->sprint_id = $sprint->id;
        $dailyStandUp->user_id = $user->id;

        $dailyStandUp->save();

        return redirect(route('dailyStandUp.index', ['project'=>$project->id, 'sprint'=>$sprint->id]));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DailyStandUp $dailyStandUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyStandUp $dailyStandUp)
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
    public function update(Request $request, DailyStandUp $dailyStandUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyStandUp $dailyStandUp)
    {
        $dailyStandUp->delete();
        return redirect()->back();
    }
}
