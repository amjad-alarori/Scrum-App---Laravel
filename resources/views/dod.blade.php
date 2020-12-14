@extends('layouts.layout')

@section('title')
    Definition of Done
@endsection

@section('content')



    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">{{$project->title}}</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Definition of Done (DoD)</h2>
                <hr>
                <p>The 'Definition of Done' is used to make requirements to tell when a feature is done. If the team has made agreements
                on when you can call a backlog element is done, they can add them on this page so every one can see and be reminded on how
                they can tell if their backlog element is done in terms of what has been discussed within the team.</p>
            </div>
            <div class="col-md-4 mb-5">
                <h1>Teamleden</h1>
                <hr>
                @foreach($teammembers as $teammember)
                    <address>
                        <li>{{$teammember->user->name . " (" . $teammember->scrumRole->title . ")"}}</li>
                    </address>
                @endforeach
            </div>
        </div>
        <!-- /.row -->

        <h1 class="display-4 mt-5 mb-2">Definition of Done</h1>
        <hr>
        <br>
{{--        <a class="nav-link" href="{{ route('defOfDone.create', ['project'=>$project])}}">Create a--}}
{{--            requirement</a>--}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create a requirement</button>
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Give a description and title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('defOfDone.store', ['project' => $project]) }}">
                            <div class="form-group">
                                @csrf
                                <label class="label">Requirement Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Requirement Description: </label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Send"/>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="col-md-8">
            @foreach($def_of_dones as $def_of_done)
                <div class="card">
                    <div class="card-body">
                        <p><b>{{ $def_of_done->title }}</b></p>
                        <hr>
                        <p>{{ $def_of_done->body }}</p>
                        <div>
                            <form method="post"
                              action="{{route('defOfDone.destroy', ['project'=>$project, 'defOfDone' => $def_of_done->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"
                                        data-whatever="@mdo">Edit
                                </button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Make an edit to your
                                            requirement</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{route('defOfDone.update', ['project'=>$project, 'defOfDone' => $def_of_done->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Title:</label>
                                                <input value="{{$def_of_done->title}}" name="title" type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Description:</label>
                                                <textarea class="form-control" name="body"
                                                          id="message-text">{{$def_of_done->body}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
        </div>
        <br>
        <br>

        <!-- /.container -->
@endsection
