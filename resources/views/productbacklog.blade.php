@extends('layouts.layout')

@section('title')
    Product Backlog
@endsection

@section('content')

    <div class="h-100 flex flex-col md:justify-center items-center pt-6 md:pt-0 bg-gray-100">
        <div class="w-full md:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden md:rounded-lg">
            <form method="POST" action="{{ route('ProductBackLog.store',['project'=> $project->id]) }}">
                @csrf
                <div>


                    <label class="block font-medium text-sm text-gray-700" for="title">Title</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title"
                           required autofocus="autofocus" autocomplete="title" value="{{old('title')}}">
                    @error('title')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>

                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="description">Description</label>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="description"
                              name="description" rows="4">{{old('description')}}</textarea>
                    @error('description')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">

                    <label class="block font-medium text-sm text-gray-700" for="priority">Priority</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="priority" type="number"
                           name="priority" autocomplete="priority" value="{{old('priority')}}">
                    @error('priority')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">


                    <label class="block font-medium text-sm text-gray-700" for="business_value">Business Value</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="business_value" type="number"
                           name="business_value" autocomplete="business_value" value="{{old('business_value')}}">
                    @error('business_value')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="user_story">Yser Story</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="user_story" type="text"
                           name="user_story" autocomplete="user_story" value="{{old('user_story')}}">
                    @error('user_story')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="story_points">Story Points</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="story_points" type="number"
                           name="story_points" autocomplete="story_points" value="{{old('story_points')}}">
                    @error('story_points')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="acceptance_criteria">Acceptance Criteria</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="acceptance_criteria" type="text"
                           name="acceptance_criteria" autocomplete="acceptance_criteria" value="{{old('acceptance_criteria')}}">
                    @error('acceptance_criteria')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div><br>


                <input type="submit" class="btn btn-info" value="Save">

            </form>
        </div>
    </div>

    @endsection

{{--    <div class="card mb-3">--}}
{{--        <img src="https://cdn.pixabay.com/photo/2018/01/17/04/14/industry-3087393_1280.jpg" class="card-img-top" alt="...">--}}
{{--        <div class="card-body">--}}

{{--            <table class="table">--}}
{{--                <thead class="thead-light">--}}
{{--                <tr>--}}
{{--                    <th scope="col">Title</th>--}}
{{--                    <th scope="col">Description</th>--}}
{{--                    <th scope="col">Priority</th>--}}
{{--                    <th scope="col">Business Value</th>--}}
{{--                    <th scope="col">User Story</th>--}}
{{--                    <th scope="col">Story Points</th>--}}
{{--                    <th scope="col">Acceptance Criteria</th>--}}
{{--                    <th scope="col"></th>--}}

{{--                </tr>--}}
{{--                </thead>--}}

{{--                {{dd($products)}}--}}

{{--                @foreach($products as $product)--}}

{{--                    <tr>--}}
{{--                        <td>{{ $product->title }}</td>--}}
{{--                        <td>{{ $product->description }}</td>--}}
{{--                        <td>{{ $product->priority }}</td>--}}
{{--                        <td>{{ $product->business_value }}</td>--}}
{{--                        <td>{{ $product->user_story }}</td>--}}
{{--                        <td>{{ $product->story_points }}</td>--}}
{{--                        <td>{{ $product->acceptance_criteria }}</td>--}}
{{--                        <td> <a class="btn btn-danger" href="{{route('ProductBackLog.destroy',['project'=>$project->id,'ProductBackLog' => $product->id])}}">Delete</a></td>--}}

{{--                    </tr>--}}
{{--                @endforeach--}}

{{--                <tbody>--}}


{{--                <section class="card mb-3">--}}

{{--                    <div class="card mb-3">--}}
{{--                        <div class="card-body">--}}
{{--                            <form action="{{ route('ProductBackLog.store',['project'=> $project->id]) }}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('post')--}}

{{--                                <div class="form-group">--}}
{{--                                    <label>Title</label>--}}
{{--                                    <input name="title" type="text" class="form-control"  placeholder="Enter Title">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Description</label>--}}
{{--                                    <input name="description" type="text" class="form-control"  placeholder="Enter the Description">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Priority</label>--}}
{{--                                    <input name="priority" type="text" class="form-control"  placeholder="Enter Priority">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Business Value</label>--}}
{{--                                    <input name="business_value" type="text" class="form-control"  placeholder="Enter Business Value">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>User Story</label>--}}
{{--                                    <textarea name="user_story" type="text" class="form-control"  placeholder="Enter User Story"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Story Points</label>--}}
{{--                                    <textarea name="story_points" type="text" class="form-control"  placeholder="Enter Story Points"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Acceptance Criteria</label>--}}
{{--                                    <textarea name="acceptance_criteria" type="text" class="form-control"  placeholder="Acceptance Criteria"></textarea>--}}
{{--                                </div>--}}

{{--                                    <input type="submit" class="btn btn-info" value="Save">--}}

{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </section>--}}





{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}









