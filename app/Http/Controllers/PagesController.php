<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function addSprint()
    {

        return view('addsprint');
    }

    public function definitionOfDone()
    {

        return view('definitionofdone');
    }

    public function productBacklog()
    {

        return view('productbacklog');
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
