@extends('layouts.layout')

@section('title')
    Daily Stand Up Form
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Daily Stand Up Form</h1>

                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- container -->
        <x-jet-authentication-card>
            <x-jet-validation-errors class="mb-4"/>

            <form method="POST" action="{{isset($dailyStandUp)?route('dailyStandUp.update',['project'=> $project, 'sprint'=>$sprint]):route('dailyStandUp.store', ['project'=> $project, 'sprint'=>$sprint])}}">
                @csrf

                <div class="mt-4">
                    <x-jet-label for="yesterday" value="{{ __('What did I do yesterday?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="yesterday"
                              name="yesterday"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('yesterday')}}</textarea>
                </div>
                <div class="mt-4">
                    <x-jet-label for="today" value="{{ __('What will I do today?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="today"
                              name="today"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('today')}}</textarea>
                </div>

                <div class="mt-4">
                    <x-jet-label for="challenge" value="{{ __('What does block me from achieving the sprint goal?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="challenge"
                              name="challenge"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('challenge')}}</textarea>

                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('Verstuur') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </x-jet-authentication-card>
        <br><br><br><br><br><br>

    {{--        <!-- /.row -->--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/sprint toevoegen.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Sprint toevoegen</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
    esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Voeg een sprint toe</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/scrumteam.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Team samenstellen</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
    esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Stel het scrum team samen</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Definition of Done</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Bekijken</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/productbacklog.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Product Backlog</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Bekijken</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


    {{--            <h1 class="display-4 mt-5 mb-2">Sprints</h1>--}}
    {{--            <hr>--}}
    {{--            <br>--}}
    {{--            <br>--}}

    {{--        <div class="row">--}}
    {{--            <div class="col-md-4 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Sprint 1</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        <div class="col-md-4 mb-5">--}}
    {{--            <div class="card h-100">--}}
    {{--                <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h4 class="card-title">Sprint 2</h4>--}}
    {{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                </div>--}}
    {{--                <div class="card-footer">--}}
    {{--                    <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="col-md-4 mb-5">--}}
    {{--            <div class="card h-100">--}}
    {{--                <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h4 class="card-title">Sprint 3</h4>--}}
    {{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                </div>--}}
    {{--                <div class="card-footer">--}}
    {{--                    <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
    <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
