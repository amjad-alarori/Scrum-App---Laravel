<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Productbacklog;

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

    public function dailyStandUp()
    {
        return view('sprintDashboard/dailyStandUp');
    }

    public function sprintReview()
    {
        return view('sprintDashboard/sprintReview');
    }

    public function scrumBoard()
    {
        return view('sprintDashboard/scrumBoard');
    }

    public function retrospective()
    {
        return view('sprintDashboard/retrospective');
    }

    public function projectdashboard()
    {

        return view('projectdashboard');
    }

    public function addSprint(Project $project)
    {




        return view('addsprint', ['project'=>$project]);
    }

    public function definitionOfDone()
    {

        return view('definitionofdone');
    }


    public function dod(){
        return view('dod');
    }

}
