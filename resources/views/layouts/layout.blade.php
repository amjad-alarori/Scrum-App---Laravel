<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ScrumApp" content="">
    <meta name="WFADSD2020 Team B3" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','ScrumApp WFADSD2020-B3')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

</head>

<body>
{{--<div class="min-h-screen font-sans text-gray-900 antialiased">--}}
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
                <li class="nav-item block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                    <a class="nav-link {{request()->url()==route('project.index')?'active':''}}"
                       href="{{route('project.index')}}">Projects <span class="sr-only">(current)</span></a>
                </li>

                @if(!is_null(request()->route('project')))
                    <li class="nav-item dropdown block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Project menu</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{route('scrumTeam.index',['project' => $project->id])}}">Scrum teams</a>
                            <a class="dropdown-item" href="{{route('productBackLog.index',['project'=>$project])}}">Product Backlog</a>
                            <a class="dropdown-item" href="{{route('defofdone.index',['project'=>$project])}}">Definition of Done</a>
                        </div>
                    </li>

                    @if(!is_null(request()->route('sprint')))
                        <li class="nav-item dropdown block pl-1 pr-2 py-3 border-l-4 border-transparent text-base focus:outline-none transition duration-150 ease-in-out">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Sprint menu</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item"
                                   href="{{route('dailyStandUp.index',['project'=> $project->id, 'sprint'=> $sprint->id, 'dailyStandUp'=>$dailyStandUp=1])}}">Daily stand up</a>
                                <a class="dropdown-item" href="{{route('review.index',['project'=> $project->id, 'sprint'=> $sprint->id, 'review'=>$review=1])}}">Sprint review</a>
                                <a class="dropdown-item" href="#">Scrum board</a>
                                <a class="dropdown-item" href="{{route('retrospective.index',['project'=> $project->id, 'sprint'=> $sprint->id])}}">Retrospective</a>
                            </div>
                        </li>
                    @endif
                @endif
            @endif
        </ul>

        <div class="float-right">
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
        </div>
    </div>
</nav>
<main role="main" class="container font-sans text-gray-900 antialiased">
    @if(session()->has('NoAccess'))
        <div class="container">
            <div class="alert alert-danger alert-dismissible m-3" id="noaccess-error">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session('NoAccess')}}
            </div>
        </div>
    @endif
    <div class="container-fluid pt-9 h-100">
        @yield('content')
    </div>
</main>
</body>


@livewireScripts
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>
    $(function () {
        $("#noaccess-error").delay(4000).slideUp(800, function () {
            $(this).remove();
        });
    });
</script>

@yield('Script')

</html>
