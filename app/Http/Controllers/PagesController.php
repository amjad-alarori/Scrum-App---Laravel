<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Productbacklog;
use App\Models\Post;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

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

    public function projectdashboard()
    {
        return view('projectdashboard');
    }

    public function addSprint(Project $project)
    {
        return view('addsprint', ['project' => $project]);
    }

    public function dod()
    {
        return view('dod');
    }

    public function team()
    {
        return view ('team');
    }

    public function definitionOfDone()
    {
        return view('definitionofdone');
    }
}
