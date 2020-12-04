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
                </div>


                <input type="submit" class="btn btn-info" value="Save">

            </form>
        </div>
    </div><br>



<div class="card">
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
        </table>

</div>




                @foreach($products as $product)


                            <table class="table">
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
                            </table>


                @endforeach
@endsection



