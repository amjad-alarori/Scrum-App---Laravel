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



                    <h1 class="display-4 text-white mt-5 mb-2"> {{$project->title}}</h1>


                </div>
            </div>
        </div>
    </header>


    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Project information</h2>
                <hr>


                <p>{{$project->description}}</p>
                <br>
                <br>
                Mission: {{$project->mission}}
                <br>
                Vision: {{$project->vision}}


            </div>
            <div class="col-md-4 mb-5">
                <h2>Teammembers</h2>
                <hr>
                <address>
                    @foreach ($teammembers as $teammember)

                        <li>{{$teammember->user->name}}</li>

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
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('sprint.create',['project' => $project->id])}}" class="btn btn-primary">Add sprint</a>
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

                        <a href="{{route('scrumTeam.index',['project' => $project->id])}}" class="btn btn-primary">Go to

                            teams</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Definition of Done</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
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
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('ProductBackLog.index',['project'=>$project->id])}}" class="btn btn-primary">Go to page</a>
                    </div>
                </div>
            </div>
        </div>


        <h5 class="display-4 mt-5 mb-2">Sprints</h5>
        <hr>
        <br>
        <br>

        <div class="row">
            @foreach ($sprints as $sprint)
               <div class="col-md-4 mb-5">
                    <div class="card h-100">

                        <div class="card-body">
                            <h1 style="font-weight: bold" class="card-title">{{$sprint->title}}</h1>
                            <p class="card-text">{{$sprint->description}}</p>
                            <br>
                            <br>
                            <hr>
                            Startdate:  {{date("d/m/Y",strtotime($sprint->startdate))}}
                            <br>
                            <br>
                            Enddate:    {{date("d/m/Y", strtotime($sprint->enddate))}}
                        </div>
                        <div class="card-footer">
<<<<<<< HEAD
                            <a href="{{route('sprint.show',['project'=> $project->id, 'sprint'=> $sprint->id])}}" class="btn btn-primary">Go to sprint</a>
=======

                            <a href="/project/{project}/sprint/{{$sprint->id}}" class="btn btn-primary">Go to sprint</a>
                            <a href="/editSprint{{$sprint->id}}" class="btn btn-warning">Edit sprint</a>
                            <a href="/deleteSprint{{$sprint->id}}" class="btn btn-danger"> Delete sprint</a>
>>>>>>> b0c2cb8... Retrospective controller/model/factory/migration aangemaakt
                        </div>
                    </div>
                </div>

        @endforeach


        <!-- /.row -->

        </div>
        <!-- /.container -->
@endsection
