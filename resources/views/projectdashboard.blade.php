@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2"> {{$project->title}}</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <div class="card rounded m-2">
                    <div class="card-header h2">Project information
                    @if($project->roleAuth() != 3)
                        <a class="btn float-right bg-warning"
                           href="{{route('project.edit',['project'=>$project])}}">
                            Edit</a>
                    @endif
                    </div>
                    <div class="card-body">
                        {{$project->description}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                Mission:<br/>
                                Vision:<br/>
                                Deadline:<br/>
                                Sprint length:
                            </div>
                            <div class="col-6">
                                {{$project->mission}}<br/>
                                {{$project->vision}}<br/>
                                {{date('d F Y',strtotime($project->deadline))}}<br/>
                                {{$project->sprintLength}} days
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div id="gauge_div" class="h-100 flex flex-col justify-center items-center"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top h-100">
                        <img class="w-100 h-100 img-fluid mx-auto p-1" src="{{ asset('images/scrumteam.jpg') }}"
                             alt="Product backlog">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Scrum Team</h4>
                        @foreach ($teammembers as $teammember)
                            <li class="{{$teammember->user->id==Auth::id()?"font-weight-bold":""}}">{{$teammember->user->name . " (" . $teammember->scrumRole->title . ")"}}</li>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <a href="{{route('scrumTeam.index',['project' => $project->id])}}"
                           class="btn btn-primary float-right">Go to teams</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top h-100">
                        <img class="w-100 h-100 img-fluid mx-auto p-1" src="{{ asset('images/productbacklog.jpg') }}"
                             alt="Product backlog">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Product Backlog</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque sequi doloribus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('ProductBackLog.index',['project'=>$project])}}" class="btn btn-primary">Go to
                            page</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top h-100">
                        <img class="w-100 h-100 img-fluid mx-auto p-1" src="{{asset('images/dod.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Definition of Done</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('defofdone.index',['project'=>$project])}}" class="btn btn-primary">Go to
                            page</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card w-100 m-2">
                <div class="row no-gutters card-header rounded">
                    <div class="col-2 col-md-1">
                        <img class="card-img p-1 rounded" src="{{ asset('images/sprint toevoegen.jpg') }}"
                             alt="Sprints">
                    </div>
                    <div class="col-10 col-md-11 d-flex align-items-center">
                        <h4 class="card-title h5 inline-block mt-2">Sprints</h4>
                        <a href="{{route('sprint.create',['project' => $project])}}" class="btn btn-primary ml-auto">Add
                            sprint</a>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($sprints as $sprint)
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1 class="card-title h5 border-bottom border-secondary pb-2">{{$sprint->title}}</h1>
                                    <p class="card-text py-3 border-bottom border-secondary">{{$sprint->description}}</p>
                                    <p class="card-text pt-3">
                                        Startdate: {{date("d/m/Y",strtotime($sprint->startdate))}}<br>
                                        Enddate: {{date("d/m/Y", strtotime($sprint->enddate))}}
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('sprint.show',['project'=> $project, 'sprint'=> $sprint])}}"
                                       class="btn btn-primary">Go to sprint</a>
                                    <a href="{{route('sprint.update',['project'=> $project->id, 'sprint'=> $sprint->id])}}"
                                       class="btn btn-warning">Edit sprint</a>
                                    <a href="{{route('sprint.destroy',['project'=> $project->id, 'sprint'=> $sprint->id])}}"
                                       class="btn btn-danger">Delete sprint</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@section('Script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['gauge']});
        google.charts.setOnLoadCallback(drawGauge);

        var startdate = "{{$startdate = count($project->sprints)>0?$project->sprints[0]->startdate:$project->created_at}}";
        var projectLength ={{date_diff(date_create($startdate),date_create($project->deadline))->format('%a')}}
        var days ={{date_create('NOW')<date_create($startdate)?0:date_diff(date_create('NOW'),date_create($startdate))->format('%a')}}


        var gaugeOptions = {
            min: 0,
            max: projectLength,
            yellowFrom: Math.round(projectLength*0.7),
            yellowTo: Math.round(projectLength*0.85),
            redFrom: Math.round(projectLength*0.85),
            redTo: projectLength,
            minorTicks: 5
        };
        var gauge;

        function drawGauge() {
            gaugeData = new google.visualization.DataTable();
            gaugeData.addColumn('number', days + ' days');
            gaugeData.addRows(1);
            gaugeData.setCell(0, 0, days);

            gauge = new google.visualization.Gauge(document.getElementById('gauge_div'));
            gauge.draw(gaugeData, gaugeOptions);
        }
    </script>
@endsection
