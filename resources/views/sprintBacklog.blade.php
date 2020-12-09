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

            @foreach ($sprintBacklog as $sprintItem)
                <tr>
                    <td>{{ $sprintItem->title }}</td>
                    <td>{{ $sprintItem->description }}</td>
                    <td>{{ $sprintItem->priority }}</td>
                    <td>{{ $sprintItem->business_value }}</td>
                    <td>{{ $sprintItem->user_story }}</td>
                    <td>{{ $sprintItem->story_points }}</td>
                    <td>{{ $sprintItem->acceptance_criteria }}</td>



                </tr>
            @endforeach
            <a href="{{route('sprintBacklog.show',['project'=>$project,'sprint'=>$sprint->id, 'sprintBacklog'=>$sprintItem->id])}}>" class="btn btn-primary">Add from productbacklog</a>
            </tbody>
        </table>





    </div>
        <!-- /.container -->
@endsection
