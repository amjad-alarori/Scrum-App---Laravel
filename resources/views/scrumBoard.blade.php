@extends('layouts.layout')

@section('title')
    Scrum Board
@endsection

@section('content')



    <!-- Header -->
{{--    <header class="bg-primary py-5 mb-5">--}}
{{--        <div class="container h-100">--}}
{{--            <div class="row h-100 align-items-center">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h1 class="display-4 text-white mt-5 mb-2">Scrum Board</h1>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}



    <!-- Page Content -->
         <div class="row equal">
            <div class="col-md-4 col-sm-6">
                <div class="column-scrumBoard">
                    <h4 class="h4">To Do</h4><br>
                    <hr>
                    <br>

                    <div class="input-group overflow">
                        <h5 class="h5ScrumBoard">Backlog Item</h5>
                        <hr class="lineBacklogItem">
                        <br>

                        <div id="accordion">
                            <div class="cardBacklogItem">

                                    <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                        More info <span class="arrow">&#8681;</span>
                                    </button>


                                <div id="collapse" class="collapse" aria-labelledby="heading">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="margin-top-10">
                            <button class="buttonScrumBoard button-backlogScrumBoard">To Do</button><button class="buttonScrumBoard button-progressScrumBoard">In Progress</button><button class="buttonScrumBoard button-doneScrumBoard">Done</button><button class="buttonScrumBoard button-deleteScrumBoard">Delete</button>
                        </div>
                    </div>


                <div class="input-group overflow">
                    <h5 class="h5ScrumBoard">Backlog Item</h5>
                    <hr class="lineBacklogItem">
                    <br>


                    <div id="accordion">
                        <div class="cardBacklogItem">

                            <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                More info <span class="arrow">&#8681;</span>
                            </button>


                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="margin-top-10">
                        <button class="buttonScrumBoard button-backlogScrumBoard">To Do</button><button class="buttonScrumBoard button-progressScrumBoard">In Progress</button><button class="buttonScrumBoard button-doneScrumBoard">Done</button><button class="buttonScrumBoard button-deleteScrumBoard">Delete</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="column-scrumBoard">
                    <h4 class="h4">In Progress</h4><br>
                    <hr>
                    <br>
                    <div class="input-group overflow">
                        <h5 class="h5ScrumBoard">Backlog Item</h5>
                        <hr class="lineBacklogItem">
                        <br>


                        <div id="accordion">
                            <div class="cardBacklogItem">

                                    <button class="btnScrumBoard btn-linkScrumBoard text-decoration-none" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        More info <span class="arrow">&#8681;</span>
                                        </button>


                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="margin-top-10">
                            <button class="buttonScrumBoard button-backlogScrumBoard">To Do</button><button class="buttonScrumBoard button-progressScrumBoard">In Progress</button><button class="buttonScrumBoard button-doneScrumBoard">Done</button><button class="buttonScrumBoard button-deleteScrumBoard">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="column-scrumBoard">
                    <h4 class="h4">Done</h4><br>
                    <hr>

                </div>
            </div>
        </div>



@endsection
