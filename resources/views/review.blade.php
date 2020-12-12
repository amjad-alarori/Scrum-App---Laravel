@extends('layouts.layout')

@section('title')
    Review
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">



                    <h1 class="display-4 text-white mt-5 mb-2"> Review: {{$sprint->title}}</h1>


                </div>
            </div>
        </div>
    </header>



    <!-- Page Content -->
    <div class="row equal">
        <div class="col-md-4 col-sm-6">
            <div class="column-review">
                <h4 class="h4">Not Done Tasks</h4><br>
                <hr>
                <br>

                @foreach ($review as $toDo)
                    @if ($toDo->status==null)

                        <div class="input-groupScrumBoard overflow">
                            <h5 class="h5ScrumBoard">{{$toDo->title}}</h5>
                            <hr class="lineBacklogItem">
                            <br>

                            <div id="accordion{{$toDo->id}}">
                                <div class="cardBacklogItem">

                                    {{$toDo->description}}<br>
                                    <br>

                                    <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapse{{$toDo->id}}" aria-expanded="false" aria-controls="collapse">
                                        More info <span class="arrow">&#8681;</span>
                                    </button>


                                    <div id="collapse{{$toDo->id}}" class="collapse" aria-labelledby="heading">
                                        <div class="card-body">
                                            <span style="font-weight:bold; color: darkblue">User story:</span><br>
                                            {{$toDo->user_story}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Story points:</span>
                                            {{$toDo->story_points}}<br>
                                            <span style="font-weight:bold; color: darkblue">Business value:</span>
                                            {{$toDo->business_value}}<br>
                                            <span style="font-weight:bold; color: darkblue">Priority:</span>
                                            {{$toDo->priority}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Acceptance criteria:</span><br>
                                            {{$toDo->acceptance_criteria}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endif
                @endforeach
                @foreach ($review as $inProgress)
                    @if ($inProgress->status==1)

                        <div class="input-groupScrumBoard overflow">
                            <h5 class="h5ScrumBoard">{{$inProgress->title}}</h5>
                            <hr class="lineBacklogItem">
                            <br>

                            <div id="accordion{{$inProgress->id}}">
                                <div class="cardBacklogItem">

                                    {{$inProgress->description}}<br>
                                    <br>

                                    <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapse{{$inProgress->id}}" aria-expanded="false" aria-controls="collapse">
                                        More info <span class="arrow">&#8681;</span>
                                    </button>


                                    <div id="collapse{{$inProgress->id}}" class="collapse" aria-labelledby="heading">
                                        <div class="card-body">
                                            <span style="font-weight:bold; color: darkblue">User story:</span><br>
                                            {{$inProgress->user_story}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Story points:</span>
                                            {{$inProgress->story_points}}<br>
                                            <span style="font-weight:bold; color: darkblue">Business value:</span>
                                            {{$inProgress->business_value}}<br>
                                            <span style="font-weight:bold; color: darkblue">Priority:</span>
                                            {{$inProgress->priority}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Acceptance criteria:</span><br>
                                            {{$inProgress->acceptance_criteria}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    @endif
                @endforeach


            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="column-review">
                <h4 class="h4">Done Tasks</h4><br>
                <hr>
                <br>

                @foreach ($review as $done)
                    @if ($done->status==2)

                        <div class="input-groupScrumBoard overflow">
                            <h5 class="h5ScrumBoard">{{$done->title}}</h5>
                            <hr class="lineBacklogItem">
                            <br>

                            <div id="accordion{{$done->id}}">
                                <div class="cardBacklogItem">

                                    {{$done->description}}<br>
                                    <br>

                                    <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapse{{$done->id}}" aria-expanded="false" aria-controls="collapse">
                                        More info <span class="arrow">&#8681;</span>
                                    </button>


                                    <div id="collapse{{$done->id}}" class="collapse" aria-labelledby="heading">
                                        <div class="card-body">

                                            <span style="font-weight:bold; color: darkblue">User story:</span><br>
                                            {{$done->user_story}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Story points:</span>
                                            {{$done->story_points}}<br>
                                            <span style="font-weight:bold; color: darkblue">Business value:</span>
                                            {{$done->business_value}}<br>
                                            <span style="font-weight:bold; color: darkblue">Priority:</span>
                                            {{$done->priority}}<br>
                                            <br>
                                            <span style="font-weight:bold; color: darkblue">Acceptance criteria:</span><br>
                                            {{$done->acceptance_criteria}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>





@endsection
