@extends('layouts.layout')

@section('title')
    Projects
@endsection

@section('content')
    @if(session()->has('successfullyCreated'))
        <div class="alert alert-success alert-dismissible" id="delete-successfull">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('successfullyCreated')}}
        </div>
    @endif

    @if(session()->has('successfullyUpdated'))
        <div class="alert alert-success alert-dismissible" id="delete-successfull">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('successfullyUpdated')}}
        </div>
    @endif

    @if(session()->has('successfullyDeleted'))
        <div class="alert alert-success alert-dismissible" id="delete-successfull">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('successfullyDeleted')}}
        </div>
    @endif
    <div class="container h-100">
        <div class="row align-items-center pb-4 my-4 border-bottom border-secondary rounded-bottom">
            <div class="col-sm-10">
                <h1 class="display-4 text-blue ">
                    Your projects</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('project.create')}}"
                   class="btn  inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                    Create new project
                </a>
            </div>
        </div>

        <div class="container">
            @if(count($projects) == 0)
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card rounded">
                            <div class="card-header">Your projects</div>
                            <div class="card-body">
                                You don't have any projects yet. Create a project
                                <a class="btn bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                                   href="{{route('project.create')}}">here</a>.
                            </div>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($projects as $project)
                    <div class="card my-2">
                        <div class="card-header">{{$project['project']->title}}</div>
                        <div class="card-body row">
                            <div class="col-lg-10">
                                {{--<p>{{$project['project']->description}}</p>--}}
                                <ul>
                                    <li>Mission: {{$project['project']->mission}}</li>
                                    <li>Vision: {{$project['project']->vision}}</li>
                                    <li>Deadline: {{date('Y M d', strtotime($project['project']->deadline))}}</li>
                                    <li>Sprint length: {{$project['project']->sprintLength}} days</li>
                                    <li>Your role: <span class="font-weight-bold">{{$project['role']->title}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn float-right bg-success bg-darken-5 w-75 ml-5 my-1"
                                   href="{{route('project.show',['project'=>$project['project']])}}">
                                    Go to</a>
                                @if($project['role']->id != 3)
                                    <a class="btn float-right bg-warning w-75 ml-5 my-1"
                                       href="{{route('project.edit',['project'=>$project['project']])}}">
                                        Edit</a>
                                    <form method="post"
                                          action="{{route('project.destroy',['project'=>$project['project']])}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn float-right bg-danger w-75 ml-5 my-1">Delete
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
