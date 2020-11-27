@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">

                {{--    @foreach ($project as $projectinfo): --}}

                    <h1 class="display-4 text-white mt-5 mb-2"> {{--{{$projectinfo['title']}} --}} Project 1</h1>
                    {{--    @endforeach --}}

                </div>
            </div>
        </div>
    </header>


    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Project information</h2>
                <hr>

              {{--   @foreach ($project as $projectinfo): --}}
                <p> {{--{{$projectinfo->description}} --}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
              {{--  @endforeach --}}
                <br>
                <a class="btn btn-primary" href="#">More info</a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Teammembers</h2>
                <hr>
                <address>
                                    @foreach ($teammembers as $teammember)

                                    <li>{{$teammember->userId}}</li>

                               @endforeach
                </address>

            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/sprint toevoegen.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Add a sprint</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/project/{{$project->id}}/addsprint" class="btn btn-primary">Add sprint</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/scrumteam.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Scrum Team</h4>
                        <p class="card-text">Assemble new scrum teams or change existing ones</p>
                    </div>
                    <div class="card-footer">
                        <a href="/project/ {{-- }}{{$project->id}}/ --}}scrumTeam" class="btn btn-primary">Go to teams</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Definition of Done</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/definitionofdone" class="btn btn-primary">Go to page</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/productbacklog.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Product Backlog</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/productbacklog" class="btn btn-primary">Go to page</a>
                    </div>
                </div>
            </div>
        </div>


        <h1 class="display-4 mt-5 mb-2">Sprints</h1>
        <hr>
        <br>
        <br>

        <div class="row">

             @foreach ($sprints as $sprint):
            <div class="col-md-4 mb-5">
                <div class="card h-100">

                    <div class="card-body">
                        <h4 class="card-title">{{$sprint->title}}</h4>
                        <p class="card-text">{{$sprint->description}}Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/sprintDashboard/{{$sprint->id}}" class="btn btn-primary">Go to sprint</a>
                    </div>
                </div>
            </div>

                @endforeach


        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
