@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <body class="bg-olive">
    <div class="container h-100 flex flex-col justify-center items-center pt-6">
        <div class="tracking-in-expand-fwd text-center p-2"
             style="font-size: min(6rem, 7vw); font-weight: 300;line-height: 1.2;">
            Scrumapp<br>
            WFADSD2020<br>
            Team B3
        </div>
        @auth()
            <div class="text-center" style="font-size: min(3.5rem, 4vw); font-weight: 300;line-height: 1.2;">
                Go to your <a class="card-link font-weight-bold" style="color:#012f99;"
                              href="{{route('project.index')}}">
                    <ins>projects</ins>
                </a> and have fun.
            </div>
        @else()
            <div class="tracking-in-expand-fwd-delayed text-center"
                 style="font-size: min(3.5rem, 4vw); font-weight: 300;line-height: 1.2;">
                make an account or login<br/>
                to enjoy convenience of scrumapp.
            </div>
        @endif
    </div>
    </body>
@endsection
