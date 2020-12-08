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



                    <h1 class="display-4 text-white mt-5 mb-2"> Add productbacklog items to sprint: {{$sprint->title}}</h1>


                </div>
            </div>
        </div>
    </header>



    <div class="container">

        @foreach ($productbBacklog as $item)


        <div class="card text-white bg-dark" style="width: 20rem;display:inline-block;" >
           <div class="card-body">
             <h4 class="title">{{$item->title}}</h4>
                <p class="card-text">Description: {{$item->description}}</p><br>
               <br>
               <p class="card-text">Userstory:<br>{{$item->user_story}}</p><br>
               <br>
                <p class="card-text">Priority: {{$item->priority}}</p><br>
                <p class="card-text">Business Value: {{$item->business_value}}</p><br>

                <p class="card-text">Story Points: {{$item->story_points}}</p><br>
               <br>
                <p class="card-text">Acceptance criteria: {{$item->acceptance_criteria}}</p>
           </div>
        </div>
            @endforeach






    </div>
        <!-- /.container -->
@endsection
