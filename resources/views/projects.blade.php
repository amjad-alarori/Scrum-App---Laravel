
"The projects:"
<ul>
    @foreach($projects as $project)
        <a href ="project/{{$project->id}}"><li>{{$project->title}}</li></a>
    @endforeach
</ul>
