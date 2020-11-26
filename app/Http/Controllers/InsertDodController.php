<?php


namespace App\Http\Controllers;
use App\InsertDod;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class InsertDodController extends Controller
{

    public function insert(){
        $urlData = getURLList();
        return view ('dod');
    }
    public function create(Request $request){
        $rules = [

        ];
    }
}
