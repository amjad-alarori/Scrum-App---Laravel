<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use Illuminate\Http\Request;

class ProductBacklogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // here validation //

        $product = new Productbacklog();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->priority = $request->priority;
        $product->business_value = $request->business_value;
        $product->user_story = $request->user_story;
        $product->story_points = $request->story_points;
        $product->acceptance_criteria = $request->acceptance_criteria;

        $product->save();

        return redirect()->back()->with('sucess', 'inserted successfually');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductBacklog  $productBacklog
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductBacklog  $productBacklog
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductBacklog  $productBacklog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBacklog $productBacklog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductBacklog  $productBacklog
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductBacklog $productBacklog)
    {
        //
    }
}
