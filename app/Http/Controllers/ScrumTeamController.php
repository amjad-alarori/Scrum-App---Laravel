<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ScrumRole;
use App\Models\ScrumTeam;
use App\Models\User;
use Illuminate\Http\Request;

class ScrumTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $team = $project->scrumTeam;

        $members = [];
        foreach ($team as $member):
            array_push($members, ['user' => $member->user, 'scrumRole' => $member->scrumRole]);
        endforeach;

        $scrumRoles = ScrumRole::all();

        return view('scrumTeam', ['members'=>$members, 'scrumRoles' => $scrumRoles]);
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

    public function searchuser(Request $request)
    {
        if (strlen($_POST['user']) === 0):
            $response['status'] = null;
            $response['message'] = null;
            $response['user'] = null;
            return json_encode($response);
        endif;

        $response = [];
        try {
            $user = User::query()->where('name', 'LIKE', '%' . $_POST['user'] . '%')
                ->orWhere('email', 'LIKE', '%' . $_POST['user'] . '%')->get();
        } catch (\Exception $e) {
            $user = false;
        }

        if ($user === false || count($user) === 0):
            $response['status'] = false;
            $response['message'] = 'user not found!';
            $response['user'] = null;
        elseif (count($user) > 1):
            $response['status'] = false;
            $response['message'] = 'more than one user found';
            $response['user'] = null;
        elseif (count($user) === 1):
            $response['status'] = true;
            $response['message'] = '';
            $response['email'] = $user[0]->email;
        endif;

        return json_encode($response);
    }
}
