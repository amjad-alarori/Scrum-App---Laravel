<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\Project;
use App\Models\Sprint;
use App\Models\StandUpQuestion;
use Illuminate\Http\Request;

class StandUpQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class)->only('index');
        $this->middleware(ProjectAdminAccess::class)->except('index');
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\StandUpQuestion $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\StandUpQuestion $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StandUpQuestion $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Project $project
     * @param Sprint $sprint
     * @param \App\Models\StandUpQuestion $standUpQuestion
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project, Sprint $sprint, StandUpQuestion $standUpQuestion)
    {
        $dailyStandUp = $standUpQuestion->dailyStandUp;

        if (count($dailyStandUp->questions) > 1):
            if (count($standUpQuestion->answers) === 0):
                $standUpQuestion->delete();
                return redirect()->back();
            else:
                return redirect()->back()->with('showError', 'this question is already answered');
            endif;
        else:
            return redirect()->back()->with('showError', 'Each daily stand-up must include at least one question');
        endif;
    }
}
