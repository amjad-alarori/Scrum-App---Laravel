<?php

namespace App\Http\Controllers;

use App\Models\SprintReview;
use Illuminate\Http\Request;

class SprintReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // this is for testing
//        $sprintReview = SprintReview::find(2);
//        return $sprintReview;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SprintReview  $sprintReview
     * @return \Illuminate\Http\Response
     */
    public function show(SprintReview $sprintReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SprintReview  $sprintReview
     * @return \Illuminate\Http\Response
     */
    public function edit(SprintReview $sprintReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SprintReview  $sprintReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SprintReview $sprintReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SprintReview  $sprintReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(SprintReview $sprintReview)
    {
        //
    }
}
