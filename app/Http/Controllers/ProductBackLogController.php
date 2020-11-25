<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Productbacklog;

class ProductBackLogController extends Controller
{
    //

    public function store(Request $request)
    {

        $product = new Productbacklog();
            $product->title = $request->title;
            $product->rol = 1;
            $product->sprint = 1;
            $product->status = 'null';
            $product->description = $request->description;
            $product->priority = $request->priority;
            $product->business_value = $request->business_value;
            $product->user_story = $request->user_story;
            $product->story_points = $request->story_points;
            $product->acceptance_criteria = $request->acceptance_criteria;

            $product->save();

            return redirect()->back()->with('sucess', 'inserted successfually');


    }
}
