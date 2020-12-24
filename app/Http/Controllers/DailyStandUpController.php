<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\Project;
use App\Models\Sprint;
use App\Models\StandUpQuestion;
use App\Rules\DuringSprint;
use App\Rules\UniqueDateInSprint;
use Illuminate\Http\Request;
use App\Models\ScrumTeam;
use App\Models\User;
use App\Models\DailyStandUp;
use Illuminate\Support\Facades\Auth;

class DailyStandUpController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAdminAccess::class)->except('index');
        $this->middleware(ProjectAccess::class)->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint)
    {
        $dailyStandUps = $sprint->dailyStandUp()->orderBy('stand_up_date')->get();

        return view('dailyStandUp', ['project' => $project, 'sprint' => $sprint, 'dailyStandUps' => $dailyStandUps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Project $project, Sprint $sprint)
    {
        return view('dailyStandUpForm', ['project' => $project, 'sprint' => $sprint]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param Sprint $sprint
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project, Sprint $sprint)
    {
        $request->validate([
            'standUpDate' => ['required', 'date', new DuringSprint($sprint), new UniqueDateInSprint($sprint)],
            'question' => ['required', 'string'],
        ]);

        $dailyStandUp = new DailyStandUp();
        $dailyStandUp->fill(['stand_up_date' => $request['standUpDate']]);
        $dailyStandUp->sprint_id = $sprint->id;
        $dailyStandUp->save();

        $standUpQuestion = new StandUpQuestion();
        $standUpQuestion->fill([
            'question' => $request['question']
        ]);
        $standUpQuestion->stand_up_id = $dailyStandUp->id;
        $standUpQuestion->save();

        return redirect()->route('dailyStandUp.show', ['project' => $project, 'sprint' => $sprint, 'dailyStandUp' => $dailyStandUp]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function show(Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        return view('dailyStandUpForm', ['project' => $project, 'sprint' => $sprint, 'dailyStandUp' => $dailyStandUp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return void
     */
    public function edit(Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        $request->validate([
            'question' => ['required', 'string'],
        ]);

        $standUpQuestion = new StandUpQuestion();
        $standUpQuestion->fill([
            'question' => $request['question']
        ]);
        $standUpQuestion->stand_up_id = $dailyStandUp->id;
        $standUpQuestion->save();

        return redirect()->route('dailyStandUp.show', ['project' => $project, 'sprint' => $sprint, 'dailyStandUp' => $dailyStandUp]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param DailyStandUp $dailyStandUp
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Project $project, Sprint $sprint, DailyStandUp $dailyStandUp)
    {
        $answerFounded = false;
        $questions = $dailyStandUp->questions;

        foreach ($questions as $question):
            if ($question->answers->count()):
                $answerFounded = true;
                break;
            endif;
        endforeach;

        if (!$answerFounded):
            $dailyStandUp->delete();
            return redirect()->back();
        else:
            return redirect()->back()->with('showError','this daily standup has answers, delete the answers first to be able to delete this.');
        endif;
    }
}
