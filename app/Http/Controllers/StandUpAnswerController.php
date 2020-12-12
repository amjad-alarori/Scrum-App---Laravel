<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Http\Requests\StoreAnswerRequest;
use App\Models\DailyStandUp;
use App\Models\Project;
use App\Models\Sprint;
use App\Models\StandUpAnswer;
use App\Models\StandUpQuestion;
use Illuminate\Http\Request;

class StandUpAnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class);
//        $this->middleware(ProjectAdminAccess::class)->except();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function create(Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {

        return view('standUpAnswer',['project'=>$project, 'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAnswerRequest $request
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return void
     */
    public function store(StoreAnswerRequest $request,Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StandUpAnswer  $standUpAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(StandUpAnswer $standUpAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StandUpAnswer  $standUpAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(StandUpAnswer $standUpAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StandUpAnswer  $standUpAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StandUpAnswer $standUpAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StandUpAnswer  $standUpAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(StandUpAnswer $standUpAnswer)
    {
        //
    }
}
