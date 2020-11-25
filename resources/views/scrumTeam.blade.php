@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    @foreach($members as $member)
        <div class="container pt-5">
            <div class="row">
                <div class="card col-sm-4 rounded p-1 scrum-team-member">
                    <div class="row no-gutters h-100 w-100">
                        <div class="col-sm-5 h-100 rounded" style="background: #868e96;">
                            <img class="card-img-top h-100 w-100 p-2 rounded-full"
                                 src="{{ $member['user']->profile_photo_url }}" alt="{{ $member['user']->name }}"/>
                        </div>
                        <div class="col-sm-7 h-100">
                            <div class="card-body h-100">
                                <div class="h-75">
                                    <h5 class="card-title font-weight-bold">{{$member['scrumRole']->title}}</h5>
                                    <p class="card-text">Name: {{ $member['user']->name }}</p>
                                </div>
                                <div class="h-25">
                                    <div class="float-right">
                                        <a href="#" class="btn btn-primary stretched-link float-right w-100">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{--  Form to add new member  --}}




@endsection
