<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Sprint;
use App\Models\StandUpQuestion;
use Illuminate\Http\Request;

class StandUpQuestionController extends Controller
{
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
     * @param  \App\Models\StandUpQuestion  $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StandUpQuestion  $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StandUpQuestion  $standUpQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StandUpQuestion $standUpQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Sprint $sprint
     * @param \App\Models\StandUpQuestion $standUpQuestion
     * @return void
     */
    public function destroy(Project $project, Sprint $sprint, StandUpQuestion $standUpQuestion)
    {
        dd('Question destroy', $standUpQuestion);
    }
}
