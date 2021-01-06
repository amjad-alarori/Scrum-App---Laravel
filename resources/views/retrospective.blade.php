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
                    <h1 class="display-4 text-white mt-5 mb-2"> Retrospective: {{$sprint->title}}</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <a href="{{route('retrospective.create',['project'=>$project->id, 'sprint'=> $sprint->id, 'user'=>$user->id])}}"
           class="btn btn-primary">Add a new retrospective comment</a>

        <div class="rowRetrospective">

            <input type="hidden" value="{{$sprint->id}}">

            <div class="columnRetrospective" id="retrospectiveGood">
                <h3 class="h3 columnRetrospectiveTitle">What went Good? </h3>
                <br>
                @foreach($retrospective as $comment)
                    @if ($comment->category==1)
                        <div class="retrospectiveInput-group retrospectiveOverflow">
                            <div class="cardRetrospective">
                                <p class="card-text">{{$comment->text}}</p>
                            </div>
                            <div class="card-footer text-muted">
                                Written by {{$comment->user->name}} on {{date("d/m/Y",strtotime($comment->created_at))}}
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

            <div class="columnRetrospective" id="retrospectiveImprove">
                <h3 class="h3 columnRetrospectiveTitle">Which things can be improved?</h3>
                <br>
                @foreach ($retrospective as $comment)
                    @if($comment->category==2)
                        <div class="retrospectiveInput-group retrospectiveOverflow">
                            <div class="cardRetrospective">
                                <p class="card-text">{{$comment->text}}</p>
                            </div>
                            <div class="card-footer text-muted">
                                Written by {{$comment->user->name}} on {{date("d/m/Y",strtotime($comment->created_at))}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
