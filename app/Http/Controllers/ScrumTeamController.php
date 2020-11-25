<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ScrumTeam;
use Illuminate\Http\Request;

class ScrumTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($projectId)
    {
        $team = Project::find($projectId)->scrumTeam;
        $members = [];
        foreach ($team as $member):
            array_push($members, ['user' => $member->user, 'scrumRole' => $member->scrumRole]);
        endforeach;

        return view('scrumTeam', ['members'=>$members]);
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
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return \Illuminate\Http\Response
     */
    public function show(ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScrumTeam $scrumTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ScrumTeam $scrumTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScrumTeam $scrumTeam)
    {
        //
    }
}
