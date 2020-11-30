@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')



    <!-- Header -->




    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">ScrumApp team B3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out {{request()->getRequestUri()=='/'?'active':''}}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

                @auth
                    <li class="nav-item  block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                @endif
            </ul>
        </div>

        <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                @auth
                    @livewire('navigation-dropdown')
                @else
                    <li class="nav-item block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endif
                @endif
            @endif
        </ul>
    </nav>


        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Project 1</h1>

                </div>
            </div>
        </div>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Project informatie</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">Meer informatie over project</a>
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
        <!-- /.row -->

        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/sprint toevoegen.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sprint toevoegen</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Voeg een sprint toe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/scrumteam.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team samenstellen</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Stel het scrum team samen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Definition of Done</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/dod" class="btn btn-primary">Bekijken</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/productbacklog.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Product Backlog</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bekijken</a>
                    </div>
                </div>
            </div>
        </div>


            <h1 class="display-4 mt-5 mb-2">Sprints</h1>
            <hr>
            <br>
            <br>

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sprint 1</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Ga naar sprint</a>
                    </div>
                </div>
            </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Sprint 2</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ga naar sprint</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Sprint 3</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Ga naar sprint</a>
                </div>
            </div>
        </div>

    </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
