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
                <h2>Daily Standup-informatie</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                    soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam.
                    Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur
                    magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt
                    voluptate. Voluptatum.</p>
                <a class="btn btn-primary" href="#">Meer informatie over daily stand up</a>
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

        <!-- container -->
        <main class="">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 bg-block">
                        <h1>Daily stand up</h1>
                        <div class="seperator">
                           <form id="daily standup" action="dailyStandUp.blade.php" method="post">
                               <input type="hidden" name="nog invullen" value="nog invullen">
                               <div class="form-group row">
                                   <label class="col-sm2 col-form-label">Naam teamlid</label>
                                   <div class="col-sm-10">
                                       <input class="form-control" type="text" name="naam teamlid" placeholder="Naam teamlid" required="">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm2 col-form-label">Datum</label>
                                   <div class="col-sm-10">
                                       <input class="form-control" type="text" name="datum" placeholder="Datum" required="">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm2 col-form-label">Wat heb ik sinds de vorige standup gedaan?</label>
                                   <div class="col-sm-10">
                                       <textarea class="form-control" rows="4" placeholder="Wat heb ik sinds de vorige standup gedaan?" name="vorige standup" form="standup" required=""></textarea>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm2 col-form-label">Wat ga ik vandaag doen?</label>
                                   <div class="col-sm-10">
                                       <textarea class="form-control" rows="4" placeholder="Wat ga ik vandaag doen?" name="vorige standup" form="standup" required=""></textarea>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm2 col-form-label">Welke uitdagingen verwacht ik?</label>
                                   <div class="col-sm-10">
                                       <textarea class="form-control" rows="4" placeholder="Welke uitdagingen verwacht ik?" name="vorige standup" form="standup" required=""></textarea>
                                   </div>
                               </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>




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
