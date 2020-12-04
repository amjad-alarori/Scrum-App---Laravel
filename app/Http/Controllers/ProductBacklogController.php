<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use App\Models\Project;
use Illuminate\Http\Request;

class ProductBacklogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $products = Productbacklog::query()->where('project_id','=',$project->id)->get();
//        $products = Productbacklog::all();


        return view('productbacklog', ['products' => $products, 'project'=>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'priority' => ['integer', 'nullable'],
            'business_value' => ['integer', 'nullable'],
            'user_story' => ['string', 'nullable'],
            'story_points' => ['integer', 'nullable'],
            'acceptance_criteria' => ['string', 'nullable'],

        ]);


        $product = new Productbacklog();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->priority = $request->priority;
        $product->business_value = $request->business_value;
        $product->user_story = $request->user_story;
        $product->story_points = $request->story_points;
        $product->project_id = $project->id;
        $product->acceptance_criteria = $request->acceptance_criteria;




        $product->save();

        return redirect()->back()->with('sucess', 'inserted successfually');

    }
    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param \App\Models\ProductBacklog $productBacklog
     * @return void
     */
    public function show(Project $project, ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param \App\Models\ProductBacklog $productBacklog
     * @return void
     */
    public function edit(Project $project, ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Project $project
     * @param \App\Models\ProductBacklog $productBacklog
     * @return void
     */
    public function update(Request $request, Project $project, ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param \App\Models\ProductBacklog $productBacklog
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Project $project, ProductBacklog $productBacklog)
    {
        $productBacklog->delete();
        return redirect()->back();

//        $title = title::find($this);
//        $title->delete();
//
//        return redirect('/home')->with('success', 'product has been deleted');
    }
}
