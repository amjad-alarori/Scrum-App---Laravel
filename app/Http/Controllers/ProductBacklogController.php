<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectAccess;
use App\Http\Middleware\ProjectAdminAccess;
use App\Models\ProductBacklog;
use App\Models\Project;
use App\Models\Sprint;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductBacklogController extends Controller
{
    public function __construct()
    {
        $this->middleware(ProjectAccess::class)->only('index');
        $this->middleware(ProjectAdminAccess::class)->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return Application|Factory|View|Response
     */
    public function index(Project $project)
    {
        $products = ProductBacklog::query()->where('project_id','=',$project->id)->where('sprint_id', '=',  null)->get();

        return view('productbacklog', ['products' => $products, 'project'=>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return RedirectResponse
     */
    public function store(Request $request, Project $project)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'priority' => ['integer', 'required'],
            'business_value' => ['integer', 'required'],
            'user_story' => ['string', 'nullable'],
            'story_points' => ['integer', 'required'],
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
        $product->sprint_id= null;
        $product->acceptance_criteria = $request->acceptance_criteria;




        $product->save();

        return redirect()->back()->with('sucess', 'inserted successfully');

    }
    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param ProductBacklog $productBacklog
     * @return void
     */
    public function show(Project $project, ProductBacklog $productBacklog)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param ProductBacklog $productBackLog
     * @return Application|Factory|View|void
     */
    public function edit(Project $project, ProductBacklog $productBackLog)
    {
        return view('productbacklogForm', ['project'=>$project,'productBackLog'=>$productBackLog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @param ProductBacklog $productBackLog
     * @return void
     */
    public function update(Request $request, Project $project, ProductBacklog $productBackLog)

    {

        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'priority' => ['integer', 'required'],
            'business_value' => ['integer', 'required'],
            'user_story' => ['string', 'nullable'],
            'story_points' => ['integer', 'required'],
            'acceptance_criteria' => ['string', 'nullable'],

        ]);



        $productBackLog->title = $request->title;
        $productBackLog->description = $request->description;
        $productBackLog->priority = $request->priority;
        $productBackLog->business_value = $request->business_value;
        $productBackLog->user_story = $request->user_story;
        $productBackLog->story_points = $request->story_points;
        $productBackLog->project_id = $project->id;
        $productBackLog->acceptance_criteria = $request->acceptance_criteria;




        $productBackLog->update();


        return redirect()->action(
            [ProductBacklogController::class, 'index'], ['project' => $project]
        )->with('successfullyUpdated', 'Item has been updated');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param ProductBacklog $productBackLog
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Project $project, ProductBacklog $productBackLog)
    {
        $productBackLog->delete();
        return back()->with('successfullDeleted', 'item is successfully deleted.');

    }
}
