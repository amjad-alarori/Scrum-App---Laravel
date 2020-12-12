<?php

namespace App\Http\Controllers;

use App\Models\ProductBacklog;
use App\Models\Project;
use App\Models\Review;
use App\Models\Sprint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project, Sprint $sprint, User $user)
    {
        $review = ProductBacklog::query()->where('sprint_id','=', $sprint->id)->get();

        return view ('review', ['project'=> $project, 'sprint'=> $sprint, 'user'=> $user, 'review'=>$review]);
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
    public function store(Request $request, Project $project, Sprint $sprint)
    {
//        $request->validate([
//            'text' => ['required', 'string']
//        ]);
//
//        $user = Auth::user();
//
//        $review = new Review();
//
//        $review->text = ($request['text']);
//        $review->project_id = $project->id;
//        $review->sprint_id = $sprint->id;
//        $review->user_id= $user->id;
//
//        $review->save();
//
//        return redirect(route('review.index', ['project'=>$project->id, 'sprint'=> $sprint->id]
//        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
