@extends('layouts.layout')

@section('title')
    Daily Stand Up
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Daily Stand Up</h1>
                </div>
            </div>
        </div>
    </header>
    @if($project->roleAuth() != 3)
        <div class="row border-bottom border-secondary pb-3">
            <div class="col-12">
                <a href="{{route('dailyStandUp.create',['project'=>$project, 'sprint'=> $sprint])}}"
                   class="btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4 float-right">
                    Make daily stand-up
                </a>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="w-full" id="accordion">
            @foreach($dailyStandUps as $dailyStandUp)
                <div class="card">
                    <div class="card-header" id="heading{{$dailyStandUp->id}}">
                        <h5 class="row mb-0">
                            <div class="{{$project->roleAuth() != 3?"col-sm-8 col-lg-10":"col-sm-9 col-lg-11"}} p-1">

                                <button
                                    class="btn btn-light border-transparent collapsed w-full text-left disabled:opacity-25 transition ease-in-out duration-150 focus:outline-none"
                                    data-toggle="collapse" data-target="#collapse{{$dailyStandUp->id}}"
                                    aria-expanded="false" aria-controls="collapse{{$dailyStandUp->id}}">
                                    {{$dailyStandUp->stand_up_date}}
                                </button>
                            </div>
                            @if($project->roleAuth() != 3)
                                <div class="col-sm-2 col-lg-1 p-1">
                                    <a class="btn btn-warning btn-block border-transparent float-right"
                                       href="{{route('dailyStandUp.show',['project'=>$project, 'sprint'=> $sprint,'dailyStandUp'=>$dailyStandUp])}}">Edit</a>
                                </div>

                                <div class="col-sm-2 col-lg-1 p-1">
                                    <form method="POST"
                                          action="{{route('dailyStandUp.destroy',['project'=>$project, 'sprint'=> $sprint,'dailyStandUp'=>$dailyStandUp])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-danger btn-block border-transparent float-right">Delete
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="col-sm-2 col-lg-1 p-1">
                                    <a class="btn btn-block bg-gray-800 hover:bg-gray-700 active:bg-gray-900 text-white border-transparent float-right focus:outline-none focus:border-gray-900 focus:shadow-outline-gray"
                                       href="{{route('standUpAnswer.create',['project'=>$project, 'sprint'=> $sprint,'dailyStandUp'=>$dailyStandUp])}}">Answer</a>
                                </div>
                            @endif
                        </h5>
                    </div>

                    <div id="collapse{{$dailyStandUp->id}}" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordion">
                        <div class="card-body ml-5">
                            <ol style="list-style: square">
                                @foreach($dailyStandUp->questions as $question)
                                    <li>{{$question->question}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
