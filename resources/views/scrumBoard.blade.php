@extends('layouts.layout')

@section('title')
    Scrum Board
@endsection

@section('content')



    <!-- Page Content -->
    <div class="row equal">
        <div class="col-md-4 col-sm-6">
            <div class="column-scrumBoard">
                <h4 class="h4">To Do</h4><br>
                <hr>
                <br>

                @foreach ($scrumBoardItems as $toDo)
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

                    <div class="margin-top-10">
                        <form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$toDo])}}"><input type="hidden" name="status" value="">@method('PATCH') @csrf<button type="submit" class="buttonScrumBoard button-backlogScrumBoard">To Do</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$toDo])}}"><input type="hidden" name="status" value="1"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf  <button type="submit" class="buttonScrumBoard button-progressScrumBoard">In Progress</button></form> <form method="POST"  class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$toDo])}}"><input type="hidden" name="status" value="2"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf <button type="submit" class="buttonScrumBoard button-doneScrumBoard">Done</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.destroy',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$toDo->id])}}">@method('DELETE') @csrf  <button type="submit" class="buttonScrumBoard button-deleteScrumBoard">Delete</button></form>
                    </div>
                </div>
                @endif
                @endforeach


            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="column-scrumBoard">
                <h4 class="h4">In Progress</h4><br>
                <hr>
                <br>


                @foreach ($scrumBoardItems as $inProgress)
                    @if ($inProgress->status==1)

                        <div class="input-groupScrumBoard overflow">
                            <h5 class="h5ScrumBoard">{{$inProgress->title}}</h5>
                            <hr class="lineBacklogItem">
                            <br>

                            <div id="accordion{{$inProgress->id}}">
                                <div class="cardBacklogItem">

                                    {{$inProgress->description}}<br>
                                    <br>
                                    <span style="font-weight:bold; color: darkblue">Assigned to: </span>{{$user->name}}</span>
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

                            <div class="margin-top-10">
                                <form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$inProgress])}}"><input type="hidden" name="status" value=""><input type="hidden" name="user_id" value="">@method('PATCH') @csrf<button type="submit" class="buttonScrumBoard button-backlogScrumBoard">To Do</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$inProgress])}}"><input type="hidden" name="status" value="1"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf  <button type="submit" class="buttonScrumBoard button-progressScrumBoard">In Progress</button></form> <form method="POST"  class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$inProgress])}}"><input type="hidden" name="status" value="2"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf <button type="submit" class="buttonScrumBoard button-doneScrumBoard">Done</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.destroy',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$inProgress->id])}}">@method('DELETE') @csrf  <button type="submit" class="buttonScrumBoard button-deleteScrumBoard">Delete</button></form>
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="column-scrumBoard">
                <h4 class="h4">Done</h4><br>
                <hr>
                <br>

                @foreach ($scrumBoardItems as $done)
                    @if ($done->status==2)

                        <div class="input-groupScrumBoard overflow">
                            <h5 class="h5ScrumBoard">{{$done->title}}</h5>
                            <hr class="lineBacklogItem">
                            <br>

                            <div id="accordion{{$done->id}}">
                                <div class="cardBacklogItem">

                                    {{$done->description}}<br>
                                    <br>

                                    <span style="font-weight:bold; color: darkblue">Assigned to: </span>{{$user->name}}</span>
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

                            <div class="margin-top-10">
                                <form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$done])}}"><input type="hidden" name="status" value=""><input type="hidden" name="user_id" value="">@method('PATCH') @csrf<button type="submit" class="buttonScrumBoard button-backlogScrumBoard">To Do</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$done])}}"><input type="hidden" name="status" value="1"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf  <button type="submit" class="buttonScrumBoard button-progressScrumBoard">In Progress</button></form> <form method="POST"  class="formButtonScrumBoard" action="{{route('scrumBoard.update',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$done])}}"><input type="hidden" name="status" value="2"><input type="hidden" name="user_id" value="{{$user->id}}"> @method('PATCH') @csrf <button type="submit" class="buttonScrumBoard button-doneScrumBoard">Done</button></form><form method="POST" class="formButtonScrumBoard" action="{{route('scrumBoard.destroy',['project'=>$project,'sprint'=>$sprint, 'scrumBoard'=>$done->id])}}">@method('DELETE') @csrf  <button type="submit" class="buttonScrumBoard button-deleteScrumBoard">Delete</button></form>
                            </div>

                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </div>



@endsection
