<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Http\Request;
use App\Models\ScrumTeam;
use http\Client\Curl\User;
use App\Models\DailyStandUp;
use Illuminate\Support\Facades\Auth;

class DailyStandUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dailyStandUps', ['dailyStandUps' => $dailyStandUps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sprintDashboard/dailyStandUp');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Sprint $sprint, User $user, Project $project)
    {
        $request->validate(['yesterday'=>['required', 'string'],
           'today'=>['required', 'string'],
            'challenge'=>['required', 'string']]);


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
