@extends('layouts.layout')

@section('title')
    Review
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">



                    <h1 class="display-4 text-white mt-5 mb-2"> Review: {{$sprint->title}}</h1>


                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">

            <div class="column">What Product Backlog items have been “Done”? </div>
            <div class="column">What Product Backlog items have not been “Done”?</div>
            <div class="column">Feedback about the product</div>
            <div class="column">Probable Product Backlog items for the next Sprint</div>

        </div>


        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
