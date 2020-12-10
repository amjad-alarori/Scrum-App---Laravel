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

              <a href="{{route('sprintBacklog.show',['project'=> $project->id, 'sprint'=> $sprint->id, 'sprintBacklogs'=>$sprintBacklogs])}}>" class="btn btn-primary">Add from productbacklog</a>

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

                   @foreach ($sprintBacklogs as $sprintBacklog)
                        <tr>
                            <td>{{ $sprintBacklog->title }}</td>
                            <td>{{ $sprintBacklog->description }}</td>
                            <td>{{ $sprintBacklog->priority }}</td>
                            <td>{{ $sprintBacklog->business_value }}</td>
                            <td>{{ $sprintBacklog->user_story }}</td>
                            <td>{{ $sprintBacklog->story_points }}</td>
                            <td>{{ $sprintBacklog->acceptance_criteria }}</td>

                        </tr>
                    @endforeach





        {{--           @foreach ($backlogSprints as $backlogSprint)--}}
        {{--               <tr>--}}
        {{--                   <td>{{ $backlogSprint->title }}</td>--}}
        {{--                   <td>{{ $backlogSprint->description }}</td>--}}
        {{--                   <td>{{ $backlogSprint->priority }}</td>--}}
        {{--                   <td>{{ $backlogSprint->business_value }}</td>--}}
        {{--                   <td>{{ $backlogSprint->user_story }}</td>--}}
        {{--                   <td>{{ $backlogSprint->story_points }}</td>--}}
        {{--                   <td>{{ $backlogSprint->acceptance_criteria }}</td>--}}

        {{--               </tr>--}}
        {{--           @endforeach--}}
                    </tbody>
                </table>





            </div>
        <!-- /.container -->
@endsection
