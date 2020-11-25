@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="card col-sm-4 rounded p-1 scrum-team-member">
                <div class="row no-gutters h-100 w-100">
                    <div class="col-sm-5 h-100 rounded" style="background: #868e96;">
                        <img class="card-img-top h-100 w-100 p-2 rounded-full"
                             src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                    </div>
                    <div class="col-sm-7 h-100">
                        <div class="card-body h-100">
                            <div class="h-75">
                                <h5 class="card-title">Alice Liddel</h5>
                                <p class="card-text">Alice is a etc.</p>
                            </div>
                            <div class="h-25">
                                <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary stretched-link float-right w-100">Remove</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary stretched-link float-right w-100">Edit</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
