@extends('layouts.layout')

@section('title')
    Project form
@endsection

@section('content')
    <div class="h-100 flex flex-col md:justify-center items-center pt-6 md:pt-0 bg-gray-100">
        <div class="w-full md:max-w-xl mt-6 px-6 py-4 bg-white shadow-md md:rounded-lg">
            <form method="POST" action="{{isset($project)?route('project.update',['project'=> $project]):route('project.store')}}">
                @csrf
                @if(isset($project))
                    @method('PUT')
                @endif
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="title">Project title</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title"
                           required autofocus="autofocus" autocomplete="title" value="{{is_null(old('title'))?(isset($project)?$project->title:''):old('title')}}">
                    @error('title')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="description">Description</label>
                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="description"
                              name="description" rows="4">{{is_null(old('description'))?(isset($project)?$project->description:''):old('description')}}</textarea>
                    @error('description')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="mission">Mission</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="mission" type="text"
                           name="mission" autocomplete="mission" value="{{is_null(old('mission'))?(isset($project)?$project->mission:''):old('mission')}}">
                    @error('mission')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="vision">Vision</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="vision" type="text"
                           name="vision" autocomplete="vision" value="{{is_null(old('vision'))?(isset($project)?$project->vision:''):old('vision')}}">
                    @error('vision')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="deadline">Deadline</label>
                    <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="deadline" type="date"
                           name="deadline" autocomplete="deadline" value="{{is_null(old('deadline'))?(isset($project)?$project->deadline:''):old('deadline')}}">
                    @error('deadline')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="sprintLength">Sprint length</label>
                    <input class="form-input rounded-md shadow-sm inline-block mt-1 col-sm-5" id="sprintLength"
                           type="number" name="sprintLength" autocomplete="sprintLength"
                           value="{{is_null(old('sprintLength'))?(isset($project)?$project->sprintLength:''):old('sprintLength')}}"> day(s)
                    @error('sprintLength')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{route('project.index')}}"
                        class="btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                        Cancel
                    </a>
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                        {{isset($project)?"Update project":"Create project"}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
