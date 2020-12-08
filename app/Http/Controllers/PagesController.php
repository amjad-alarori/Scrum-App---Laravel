<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PagesController extends Controller
{

    public function sprintDashboard()
    {
        return view('sprintDashboard');
    }

//    public function dailyStandUp()
//    {
//        return view('dailyStandUp');
//    }


    public function scrumBoard()
    {
        return view('scrumBoard');
    }

    public function addSprint(Project $project)
    {
        return view('addsprint', ['project' => $project]);
    }

    public function dod()
    {
        return view('dod');
    }

    public function definitionOfDone()
    {
        return view('definitionofdone');
    }
}
