@extends('layouts.layout')

@section('title')
    Home Sprint Dashboard
@endsection

@section('content')

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Sprint Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Sprint</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">More about Sprint</a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Teamleden</h2>
                <hr>
                <address>
                    <br> Naam 1
                    <br> Naam 2
                    <br> Naam 3
                    <br> Naam 4
                    <br> Naam 5
                    <br> Naam 6
                </address>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dailyStandUp.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Daily Stand up</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">

                        <a href="{{route('dailyStandUp.index',['project'=> $project->id, 'sprint'=> $sprint->id, 'dailyStandUp'=>$dailyStandUp=1])}}" class="btn btn-primary">Go to Daily stand up</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/sprintReview.png') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sprint review</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('review.index',['project'=> $project->id, 'sprint'=> $sprint->id, 'review'=>$review=1])}}" class="btn btn-primary">Go to Sprint review</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/scrumBoard.png') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Scrum board</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('scrumBoard.index',['project'=> $project->id, 'sprint'=> $sprint->id])}}" class="btn btn-primary">Go to Scrum Board</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-md-4 mb-5" id="columnSprintDashboard1">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/sprintRetrospective.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Retrospective</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('retrospective.index',['project'=> $project->id, 'sprint'=> $sprint->id])}}" class="btn btn-primary">Go to Retrospective</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5 sprintDashboard" id="columnSprintDashboard2">
                <div class="card h-100">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sprintbacklog</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('sprintBacklog.index',['project'=> $project->id, 'sprint'=> $sprint->id])}}" class="btn btn-primary">Go to Sprintbacklog</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
