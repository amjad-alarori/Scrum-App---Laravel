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
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button
                                class="btn btn-light border-transparent collapsed w-full text-left disabled:opacity-25 transition ease-in-out duration-150 focus:outline-none"
                                data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                {{$dailyStandUp->stand_up_date}}
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                @foreach($dailyStandUp->questions as $question)
                                    <li>{{$questions->question}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
