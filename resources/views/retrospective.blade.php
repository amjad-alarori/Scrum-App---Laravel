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


        <div class="rowRetrospective">




            <div class="columnRetrospective" id="retrospectiveGood">
                <h3 class="columnRetrospectiveTitle">What went Good? </h3>
                <br>


                @foreach($retrospective as $comment)
                    @if ($comment->category==1)

                <div class="input-group overflow">
                    <div class="card-body">
                        <p class="card-text">{{$comment->text}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{$comment->user->name}}
                    </div>
                </div>
                    @endif
                    @endforeach

            </div>

            <div class="columnRetrospective" id="retrospectiveImprove">
             <h3 class="columnRetrospectiveTitle">Which things can be improved?</h3>
                <br>
             @foreach ($retrospective as $comment)
             @if($comment->category==2)
                        <div class="input-group overflow">
                            <div class="card-body">
                                <p class="card-text">{{$comment->text}}</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{$comment->user->name}}
                            </div>
                 @endif
                 @endforeach

            </div>



        </div>


        <!-- /.row -->
    </div>
        <!-- /.container -->
@endsection
