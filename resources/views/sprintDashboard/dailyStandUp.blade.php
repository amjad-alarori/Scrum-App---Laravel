@extends('layouts.layout')

@section('title')
    Daily Stand Up
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Daily Stand Up</h1>

                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Daily Standup-informatie</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                    soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam.
                    Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur
                    magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt
                    voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">Meer informatie over daily stand up</a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Teamleden</h2>
                <hr>
                <address>
                    <br> Naam 1
                    <br> Naam 2
                    <br> Naam 3
                    <br> Naam 4
                    <br> Naam 5
                    <br> Naam 6
                </address>
            </div>
        </div>

        <!-- container -->
        <x-jet-authentication-card>
            <x-jet-validation-errors class="mb-4"/>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Naam') }}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus
                                 autocomplete="name"/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="datum" value="{{ __('Datum') }}"/>
                    <x-jet-input id="datum" class="block mt-1 w-full" type="datum" name="datum" required/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="dailyStandUp" value="{{ __('Wat heb ik sinds de vorige standup gedaan?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="vorigeStandUp"
                              name="dailyStandUp"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('biography')}}</textarea>
                </div>
                <div class="mt-4">
                    <x-jet-label for="dailyStandUp" value="{{ __('Wat ga ik vandaag doen?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="vorigeStandUp"
                              name="dailyStandUp"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('biography')}}</textarea>
                </div>

                <div class="mt-4">
                    <x-jet-label for="dailyStandUp" value="{{ __('Welke uitdagingen verwacht ik?') }}"/>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="vorigeStandUp"
                              name="dailyStandUp"
                              style="margin-top: 4px; margin-bottom: 0px;">{{old('biography')}}</textarea>

                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('Verstuur') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </x-jet-authentication-card>


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
