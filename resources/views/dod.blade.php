@extends('layouts.layout')

@section('title')
    Definition of Done
@endsection

@section('content')



    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Project 1</h1>

                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Project informatie</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">Meer informatie over project</a>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Teamleden</h2>
                <hr>
                <address>
                    <br> Naam 1
                    <br> Naam 2
                    <br> Naam 3
                    <br> Naam 4
                    <br> Naam 5
                    <br> Naam 6
                </address>

            </div>
        </div>
        <!-- /.row -->

        <h1 class="display-4 mt-5 mb-2">Definition of Done</h1>
        <hr>
        <br>
        <br>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach($posts as $post)
                            <p><b>{{ $post->title }}</b></p>
                            <p>
                                {{ $post->body }}
                            </p>
                            <p><a href='delete/{{ $post->id }}'>Delete</a></p>
                        @endforeach
                    </div>
                </div>
            </div>

        <br>
        <br>

        <div class="row">
            <div class="col-md-4 mb-5">
                    <a class="nav-link" href="{{ route('post.create') }}">Create a requirement</a>
            </div>
        </div>
    <!-- /.container -->
@endsection
