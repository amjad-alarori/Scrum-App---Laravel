<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
//        return view('home');
    }

    public function welcome(){
        return view('home');
    }


}
