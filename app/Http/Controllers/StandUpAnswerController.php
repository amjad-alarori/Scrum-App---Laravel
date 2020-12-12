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
use Illuminate\Support\Facades\Auth;

class StandUpAnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAnswerRequest $request,Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        $answer = new StandUpAnswer();
        $answer->question_id = $request['questionId'];
        $answer->user_id = Auth::id();
        $answer->answer = $request['question'.$request['questionId']];

        $answer->save();

        return redirect()->back();
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
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @param \App\Models\StandUpAnswer $standUpAnswer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit(Project $project, Sprint $sprint, DailyStandUp $dailyStandUp, StandUpAnswer $standUpAnswer)
    {
        return view('standUpAnswer',['project'=>$project, 'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp, 'answer'=>$standUpAnswer]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @param \App\Models\StandUpAnswer $standUpAnswer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function update(StoreAnswerRequest $request,Project $project, Sprint $sprint, DailyStandUp $dailyStandUp, StandUpAnswer $standUpAnswer)
    {
        $standUpAnswer->answer = $request['question'.$request['questionId']];
        $standUpAnswer->update();

        return view('standUpAnswer',['project'=>$project, 'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @param \App\Models\StandUpAnswer $standUpAnswer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project,Sprint $sprint,DailyStandUp $dailyStandUp, StandUpAnswer $standUpAnswer)
    {
        $standUpAnswer->delete();
        return view('standUpAnswer',['project'=>$project, 'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp]);

    }
}
