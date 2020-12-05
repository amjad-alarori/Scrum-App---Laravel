@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">



                    <h1 class="display-4 text-white mt-5 mb-2"> Retrospective: {{$sprint->title}}</h1>


                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">

                    <div class="column">What went Good? </div>
                    <div class="column">Which things can be improved?</div>
                    <div class="column"></div>


        </div>


        <!-- /.row -->
    </div>
        <!-- /.container -->
@endsection
