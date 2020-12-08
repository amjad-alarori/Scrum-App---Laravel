@extends('layouts.layout')

@section('title')
    Product Backlog
@endsection

@section('content')

    <div class="container h-100">
        <div class="row align-items-center pb-4 my-4 border-bottom border-secondary rounded-bottom">
            <div class="col-sm-10">
                <h1 class="display-4 text-blue ">
                    Edit Your Product Backlog</h1>
            </div>
        </div>


    <div class="h-100 flex flex-col md:justify-center items-center pt-6 md:pt-0 bg-gray-100">
        <div class="w-full md:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden md:rounded-lg">
            <form method="POST" action="{{ route('productBackLog.update',['project'=> $project->id, 'productBackLog' => $productBackLog->id]) }}">
                @csrf
                @if(isset($productBackLog))
                    @method('PUT')
                @endif
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="title">Title</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title"
                           required autofocus="autofocus" autocomplete="title" value="{{is_null(old('title'))?(isset($productBackLog)?$productBackLog->title:''):old('title')}}">
                    @error('title')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>

                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="description">Description</label>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="description"
                              name="description" rows="4">{{is_null(old('description'))?(isset($productBackLog)?$productBackLog->description:''):old('description')}}</textarea>
                    @error('description')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">

                    <label class="block font-medium text-sm text-gray-700" for="priority">Priority</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="priority" type="number"
                           name="priority" autocomplete="priority" value="{{is_null(old('priority'))?(isset($productBackLog)?$productBackLog->priority:''):old('priority')}}">
                    @error('priority')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">


                    <label class="block font-medium text-sm text-gray-700" for="business_value">Business Value</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="business_value" type="number"
                           name="business_value" autocomplete="business_value" value="{{is_null(old('business_value'))?(isset($productBackLog)?$productBackLog->business_value:''):old('business_value')}}">
                    @error('business_value')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="user_story">Yser Story</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="user_story" type="text"
                           name="user_story" autocomplete="user_story" value="{{is_null(old('user_story'))?(isset($productBackLog)?$productBackLog->user_story:''):old('user_story')}}">
                    @error('user_story')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="story_points">Story Points</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="story_points" type="number"
                           name="story_points" autocomplete="story_points" value="{{is_null(old('story_points'))?(isset($productBackLog)?$productBackLog->story_points:''):old('story_points')}}">
                    @error('story_points')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="acceptance_criteria">Acceptance Criteria</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="acceptance_criteria" type="text"
                           name="acceptance_criteria" autocomplete="acceptance_criteria" value="{{is_null(old('acceptance_criteria'))?(isset($productBackLog)?$productBackLog->acceptance_criteria:''):old('acceptance_criteria')}}">
                    @error('acceptance_criteria')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div><br>


                <input type="submit" class="btn btn-info" value="Save">

            </form>
        </div>
    </div><br>


@endsection

