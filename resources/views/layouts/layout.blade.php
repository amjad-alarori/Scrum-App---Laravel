<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="ScrumApp" content="">
    <meta name="WFADSD2020 Team B3" content="">

    <title>@yield('title','ScrumApp WFADSD2020-B3')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <link rel="stylesheet" href="../../css/app.css">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">ScrumApp team B3</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->getRequestUri()=='/'?'active':''}}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            @endif
        </ul>
    </div>
    <ul class="navbar-nav mr-auto">
        @if (Route::has('login'))
            @auth
                <li class="nav-item dropleft">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a class="dropdown-item" href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                        @endif
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <a class="dropdown-item">{{ __('Manage Team') }}</a>
                            <a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">{{ __('Team Settings') }}</a>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <a class="dropdown-item" href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </a>
                            @endcan
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">{{ __('Logout') }}</a>
                        </form>
                    </div>
                </li>

                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
            @endif
        @endif
    </ul>
</nav>

@yield('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
