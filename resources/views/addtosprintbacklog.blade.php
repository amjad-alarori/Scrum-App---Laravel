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

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Priority</th>
                <th scope="col">Business Value</th>
                <th scope="col">User Story</th>
                <th scope="col">Story Points</th>
                <th scope="col">Acceptance Criteria</th>
            </tr>
            </thead>
            <tbody>

                @foreach($productBackLog as $item)



            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->priority }}</td>
                <td>{{ $item->business_value }}</td>
                <td>{{ $item->user_story }}</td>
                <td>{{ $item->story_points }}</td>
                <td>{{ $item->acceptance_criteria }}</td>

                <td>
                   <form method="POST" action="{{route('sprintBacklog.update',['project'=>$project,'sprint'=>$sprint, 'sprintBacklog'=>$item])}}">
                            @method('PATCH')
                            @csrf
                        <button class="btn btn-warning " type="submit">{{$item->id}}</button>
                   </form>
                </td>


            </tr>

        @endforeach





    </div>
        <!-- /.container -->
@endsection
