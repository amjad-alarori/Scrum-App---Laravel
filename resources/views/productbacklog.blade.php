@extends('layouts.layout')

@section('title')
    Product Backlog
@endsection

@section('content')


    <div class="card mb-3">
        <img src="https://cdn.pixabay.com/photo/2018/01/17/04/14/industry-3087393_1280.jpg" class="card-img-top" alt="...">
        <div class="card-body">

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Business Value</th>
                    <th scope="col">User Story</th>
                    <th scope="col">Story Points</th>
                    <th scope="col">Acceptance Criteria</th>
                    <th scope="col"></th>

                </tr>
                </thead>

                @foreach($products as $product)

                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->priority }}</td>
                        <td>{{ $product->business_value }}</td>
                        <td>{{ $product->user_story }}</td>
                        <td>{{ $product->story_points }}</td>
                        <td>{{ $product->acceptance_criteria }}</td>
                        <td> <a class="btn btn-danger" href="{{route('ProductBackLog.destroy',['project'=>$project->id,'ProductBackLog' => $product->id])}}">Delete</a></td>

                    </tr>
                @endforeach

                <tbody>


                <section class="card mb-3">

                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="{{ route('ProductBackLog.store',['project'=> $project->id]) }}" method="post">
                                @csrf
                                @method('post')

                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control"  placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" type="text" class="form-control"  placeholder="Enter the Description">
                                </div>
                                <div class="form-group">
                                    <label>Priority</label>
                                    <input name="priority" type="text" class="form-control"  placeholder="Enter Priority">
                                </div>
                                <div class="form-group">
                                    <label>Business Value</label>
                                    <input name="business_value" type="text" class="form-control"  placeholder="Enter Business Value">
                                </div>
                                <div class="form-group">
                                    <label>User Story</label>
                                    <textarea name="user_story" type="text" class="form-control"  placeholder="Enter User Story"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Story Points</label>
                                    <textarea name="story_points" type="text" class="form-control"  placeholder="Enter Story Points"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Acceptance Criteria</label>
                                    <textarea name="acceptance_criteria" type="text" class="form-control"  placeholder="Acceptance Criteria"></textarea>
                                </div>

                                    <input type="submit" class="btn btn-info" value="Save">

                            </form>
                        </div>
                    </div>

                </section>





                </tbody>
            </table>
        </div>
    </div>








@endsection
