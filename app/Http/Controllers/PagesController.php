<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function sprintDashboard(){
        return view('sprintDashboard');
    }

    public function dailyStandUp(){
        return view('sprintDashboard/dailyStandUp');
    }

    public function sprintReview(){
        return view('sprintDashboard/sprintReview');
    }

    public function scrumBoard(){
        return view('sprintDashboard/scrumBoard');
    }

    public function retrospective(){
        return view('sprintDashboard/retrospective');
    }

    public function projectdashboard(){

        return view('projectdashboard');
    }

    public function addSprint(){

        return view ( 'addsprint');
    }

    public function definitionOfDone(){

        return view ('definitionofdone');
    }

    public function productBacklog(){

        return view('productbacklog');
    }


}
