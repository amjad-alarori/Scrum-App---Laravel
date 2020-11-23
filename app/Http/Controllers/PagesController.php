<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function projectdashboard(){
        return view('projectdashboard');
    }

    public function addSprint(){

        return view('addsprint');
    }

    public function addTeam(){
        return view ('team');
    }

    public function definitionOfDone(){
        return view ('definitionofdone');
    }

    public function productBacklog(){

        return view ('productbacklog');
    }
}
