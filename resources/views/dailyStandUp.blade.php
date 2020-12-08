@extends('layouts.layout')

@section('title')
    Daily Stand Up
@endsection

@section('content')


    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Daily Stand Up</h1>

                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Daily Standup</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                    soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam.
                    Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur
                    magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt
                    voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">More about daily stand up</a>
                <br><br><br>
                <div>
                <p style="color: crimson">HIER MOET LIJST KOMEN OP BASIS VAN ALLEEN DATUMS / SPRINTS / SCRUMTEAMS MET ALLE DAILY STAND UPS.
                    BIJ AANKLIKKEN VAN DATUM/SPRINT ZIE JE PAS DE DAILY STAND UP-BERICHTEN.</p>
                </div>
                <br><br>
                <div>
                    <a href="{{route('dailyStandUp.create',['project'=> $project->id, 'sprint'=> $sprint->id, 'review'=>$review=1])}}" class="btn btn-primary">Go to Daily stand up Form</a>
                </div>
            </div>

            {{--accordion bootstrap 4--}}

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            {{--END accordion bootstrap 4--}}



        </div>



    {{--        <!-- /.row -->--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/sprint toevoegen.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Sprint toevoegen</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
    esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Voeg een sprint toe</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/scrumteam.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Team samenstellen</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente
    esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Stel het scrum team samen</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/dod.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Definition of Done</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Bekijken</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="col-md-3 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="{{ asset('images/productbacklog.jpg') }}" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Product Backlog</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Bekijken</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


    {{--            <h1 class="display-4 mt-5 mb-2">Sprints</h1>--}}
    {{--            <hr>--}}
    {{--            <br>--}}
    {{--            <br>--}}

    {{--        <div class="row">--}}
    {{--            <div class="col-md-4 mb-5">--}}
    {{--                <div class="card h-100">--}}
    {{--                    <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h4 class="card-title">Sprint 1</h4>--}}
    {{--                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer">--}}
    {{--                        <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        <div class="col-md-4 mb-5">--}}
    {{--            <div class="card h-100">--}}
    {{--                <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h4 class="card-title">Sprint 2</h4>--}}
    {{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                </div>--}}
    {{--                <div class="card-footer">--}}
    {{--                    <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="col-md-4 mb-5">--}}
    {{--            <div class="card h-100">--}}
    {{--                <img class="card-img-top" src="https://placehold.it/300x200" alt="">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h4 class="card-title">Sprint 3</h4>--}}
    {{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>--}}
    {{--                </div>--}}
    {{--                <div class="card-footer">--}}
    {{--                    <a href="#" class="btn btn-primary">Ga naar sprint</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
    <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
