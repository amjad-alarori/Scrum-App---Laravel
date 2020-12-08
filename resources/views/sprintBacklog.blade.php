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
                    <h1 class="display-4 text-white mt-5 mb-2"> Sprintbacklog: {{$sprint->title}}</h1>
                </div>
            </div>
        </div>
    </header>



    <div class="container">

{{--        <a href="{{route('sprintBacklog.show',['project'=>$project->id, 'sprint'=> $sprint->id, 'sprintBacklog'=>$sprintProductBacklog])}}" class="btn btn-primary">Add Backlog items to sprint</a>--}}

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Priority</th>
                <th scope="col">Business Value</th>
                <th scope="col">User Story</th>
                <th scope="col">Story Points</th>
                <th scope="col">Acceptance Criteria</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->priority }}</td>
                    <td>{{ $product->business_value }}</td>
                    <td>{{ $product->user_story }}</td>
                    <td>{{ $product->story_points }}</td>
                    <td>{{ $product->acceptance_criteria }}</td>




        @foreach($ProductBacklogs as $item)

            <div class="card text-white bg-secondary" id="cardProductBacklog" style="width: 30rem;display:inline-block;" >
                <div class="card-header">{{$item->title}}</div>
                <div class="card-body">
                    <p class="card-text">Description: {{$item->description}}</p><br>

                    <p class="card-text">Userstory:<br>{{$item->user_story}}</p><br>

                    <p class="card-text">Priority: {{$item->priority}}</p>
                    <p class="card-text">Business Value: {{$item->business_value}}</p>

                    <p class="card-text">Story Points: {{$item->story_points}}</p><br>

                    <p class="card-text">Acceptance criteria: {{$item->acceptance_criteria}}</p>
                </div>
            </div>

        @endforeach

</div>
<div class="col-6">
    @foreach($sprintBacklogs as $item)

        <div class="card text-white bg-dark" style="width: 20rem;display:inline-block;" >
            <div class="card-body">
                <h3 class="h3">{{$item->title}}</h3>
                <p class="card-text">Description: {{$item->description}}</p><br>
                <br>
                <p class="card-text">Userstory:<br>{{$item->user_story}}</p><br>
                <br>
                <p class="card-text">Priority: {{$item->priority}}</p><br>
                <p class="card-text">Business Value: {{$item->business_value}}</p><br>

                <p class="card-text">Story Points: {{$item->story_points}}</p><br>
                <br>
                <p class="card-text">Acceptance criteria: {{$item->acceptance_criteria}}</p>
            </div>
        </div>

    @endforeach
</div>




    </div>
        <!-- /.container -->
@endsection
