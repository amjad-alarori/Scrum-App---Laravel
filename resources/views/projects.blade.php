@extends('layouts.layout')

@section('title')
    Projects
@endsection

@section('content')
    <div class="container h-100">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-blue mt-5 mb-2">Projects</h1>
                <hr>
                <br>
                <br>
            </div>
        </div>


        <!-- /.row -->

        <div class="row">
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/sprint toevoegen.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Sprint toevoegen</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Voeg een sprint toe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/scrumteam.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team samenstellen</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Stel het scrum team samen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Definition of Done</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="/dod" class="btn btn-primary">Bekijken</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/productbacklog.jpg') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Product Backlog</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Bekijken</a>
                    </div>
                </div>
            </div>
        </div>
        






        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
