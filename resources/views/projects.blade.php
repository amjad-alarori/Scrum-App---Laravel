@extends('layouts.layout')

@section('title')
    Projects
@endsection

@section('content')
    <div class="container h-100">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-blue mt-5 mb-2">Projects</h1>
                <hr>
                <br>
                <br>
            </div>
        </div>

        <!-- Message when no projects have been created yet -->
        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <hr>
                            <div class="card-header">Your projects</div>
                            <div class="card-body">
                                You don't have any projects yet. Create a project <a href="{{route('project.create')}}" id="hereLink">here.</a>
                            </div>
                        </div>

                        @foreach ($projects as $project)
                            <div class="card">
                                <hr>
                                <div class="card-header">{{$project->title}}</div>
                                <div class="card-body">{{$project->description}}
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
