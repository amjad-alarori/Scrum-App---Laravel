@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="h-100 bg-olive">
        <div class="container h-100 flex flex-col justify-center items-center pt-6">
            <span class="tracking-in-expand-fwd display-1 text-center">
                Scrumapp<br>
                WFADSD2020<br>
                Team B3
            </span>
            <span class="tracking-in-expand-fwd-delayed display-4 text-center">
                @auth()
                    Go to your <a class="card-link" href="{{route('project.index')}}">projects</a> and have fun.
                @else()
                    make an account or loing<br/>
                    to enjoy convenience of scrumapp.
                @endif
            </span>
        </div>
    </div>
@endsection
