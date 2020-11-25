<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productbacklog;

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

    public function team(){

        return view ('team');

    }

    public function definitionOfDone(){

        return view ('definitionofdone');
    }

    public function productBacklog(){
        $products = Productbacklog::all();

        return view('productbacklog', ['products' => $products]);
    }

    public function algemeenDashboard(){
        return view('algemeenDashboard');
    }
}
