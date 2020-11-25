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

                </tr>
                </thead>
                <tbody>


                <section class="card mb-3">

                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="{{ url('/store') }}" method="post">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="Title" type="text" class="form-control"  placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="Description" type="text" class="form-control"  placeholder="Enter the Description">
                                </div>
                                <div class="form-group">
                                    <label>Priority</label>
                                    <input name="Priority" type="text" class="form-control"  placeholder="Enter Priority">
                                </div>
                                <div class="form-group">
                                    <label>Business Value</label>
                                    <input name="Business_Value" type="text" class="form-control"  placeholder="Enter Business Value">
                                </div>
                                <div class="form-group">
                                    <label>User Story</label>
                                    <input name="User_Story" type="text" class="form-control"  placeholder="Enter User Story">
                                </div>
                                <div class="form-group">
                                    <label>Story Points</label>
                                    <input name="Story_Points" type="text" class="form-control"  placeholder="Enter Story Points">
                                </div>
                                <div class="form-group">
                                    <label>Acceptance Criteria</label>
                                    <input name="Acceptance_Criteria" type="text" class="form-control"  placeholder="Acceptance Criteria">
                                </div>

                                    <input type="submit" class="btn btn-info" value="Save">

                            </form>
                        </div>
                    </div>

                </section>




{{--                @foreach($students as $student)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $student->cne }}</td>--}}
{{--                        <td>{{ $student->firstName }}</td>--}}
{{--                        <td>{{ $student->lastName }}</td>--}}
{{--                        <td>{{ $student->age }}</td>--}}
{{--                        <td>{{ $student->speciality }}</td>--}}
{{--                        <td>--}}

{{--                            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>--}}

{{--                        </td>--}}


{{--                    </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>








@endsection
